<?php

namespace App\Http\Controllers;

use App\Models\invoices;
use App\Models\orders;
use App\Models\customer;
use Illuminate\Http\Request; 

class invoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    function fetchData()
    {
        $invoices = invoices::leftJoin('customers', 'invoices.order_receiver_name', '=', 'customers.id')
                    ->select('invoices.*', 'customers.name as customer')
                    ->orderBy('created_at', 'desc')->get()->toArray();
        return $invoices;
        
    }
    public function index()
    {
        $data= array(
            'title'=>'Invoices',
            'invoices'=>$this->fetchData(),
            'names'=>customer::all()->toArray(),
            'orderID'=>orders::all()->toArray()
        );
        return view('invoices.invoices', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= array(
            'title'=>'New Invoice',
            
        );
        //print_r(customer::all()->toArray());
        return view('invoices.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $o_id=$request->input('order_id');
        $storeData = $request->validate([

            'order_id' => 'required|max:255',
            'order_receiver_name' => 'required|max:255',
            'order_total_amount_due' => 'required|max:255',

        ]);
        $invoices = invoices::create($storeData);
        $this->updateOrder($o_id);
        echo "200";
        
        //return redirect('/invoice')->with('completed','InVoice saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function show(invoices $invoices)
    {
        return $invoices;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function edit(invoices $invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoices $invoices)
    {
        
    }
    public function updateOrder($order_id)
    {
        $invoices = orders::where('id', $order_id)
                    ->update(['status' => 1]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoices  $invoices
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoices $invoices)
    {
        //
    }
    public function getInvoices(Request $request)
    {
        $id = $request->input('cust_id');

        $invoices = invoices::select('id')
                    ->where('status', '0')
                    ->where('order_receiver_name', $id)
                    ->where('order_total_amount_due','>', '0')
                    ->get()->toJson();

        echo $invoices;
    }
    public function getInvoicesAmount(Request $request)
    {
        $id = $request->input('invoices_id');

        $invoices = invoices::select('order_total_amount_due as amount')
                    ->where('id', $id)
                    ->first();
        if(empty($invoices))
            echo json_encode(array('amount'=>''));
        else
            echo $invoices->toJson();
    }
}

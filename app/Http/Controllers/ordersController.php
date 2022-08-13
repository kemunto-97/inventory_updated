<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Models\products;
use App\Models\customer;
use Illuminate\Http\Request;

class ordersController extends Controller
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
        $orders = orders::orderBy('created_at', 'desc')->get()->toArray();
        return $orders;
    }
    public function index()
    {
       
        $data= array(
            'title'=>'Orders',
            'orders'=>$this->fetchData(),
            'names'=>customer::all()->toArray(),
            'products'=>products::all()->toArray()
        );
        return view('orders.orders', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= array('title'=>'New Order');
        return view('orders.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([

            'product_size' => 'required|max:255',
            'product_name' => 'required|max:255',
            'product_price' => 'required|max:255',

        ]);

        $orders = orders::create($storeData);
        echo "200";
        
        //return redirect('/order')->with('completed','Orders saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(orders $orders)
    {
            return $orders;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(orders $orders)
    {
        //
    }

    public function getOrders(Request $request)
    {
        $id = $request->input('cust_id');

        $orders = orders::select('id')
                    ->where('status', '0')
                    ->where('customer', $id)
                    ->where('product_price','>', '0')
                    ->get()->toJson();

        echo $orders;
    }
    public function getOrderAmount(Request $request) 
    {
        $id = $request->input('order_id');

        $orders = orders::select('product_price as amount')
                    ->where('id', $id)
                    ->first();
        if(empty($orders))
            echo json_encode(array('amount'=>''));
        else
            echo $orders->toJson();
    }
}

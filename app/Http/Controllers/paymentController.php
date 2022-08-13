<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Models\payment_modes;
use App\Models\customer;
use App\Models\invoices;
use Illuminate\Http\Request;

class paymentController extends Controller
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
        $payment = payment::leftJoin('customers', 'payments.paycustomer', '=', 'customers.id')
                            ->select('payments.*', 'customers.name as customer')
                            ->orderBy('created_at', 'desc')->get()->toArray();
        return $payment;
    }
    public function index()
    {
       
        $data= array(
            'title'=>'Payment',
            'payment'=>$this->fetchData(),
            'modes'=>payment_modes::all()->toArray(),
            'names'=>customer::all()->toArray(),
            'invoicesID'=>invoices::all()->toArray()
        );
        return view('payments.payments', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= array(
            'title'=>'Receive Payment',
            
        );
        return view('payments.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $pay_id=$request->input('invoices_id');
        $amount=$request->input('amount');
        $storeData = $request->validate([

            'paycustomer' => 'required|max:255',
            'invoices_id' => 'required|max:255',
            'transaction_id' => 'required|max:255',
            'method' => 'required|max:255',
            'payamount' => 'required|max:255',
        ]);
        
        $payment = payment::create($storeData);
        $this->updateInvoice($pay_id, $amount);
        echo "200";
        //return redirect('/payment')->with('completed', 'Your payment have been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        return $payment;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment)
    {
        //
    }

    public function updateInvoice($pay_id, $amount)
    {
        //GET INVOICE DATA
        $invoice = invoices::where('id', $pay_id)->first();
        //Do the calculations i.e
        //new paid amount=current invoice paid amount+ $amount
        $new_paid_amount = $invoice->order_total_amount_paid + $amount;
        //new due amount=current due amount- $amount
        $new_due_amount = $invoice->order_total_amount_due - $amount;
        //Update Invoice paid and due amount with new paid and due amount
        $updateDetails = [
                'status' => 1,
                'order_total_amount_paid' => $new_paid_amount,
                'order_total_amount_due' => $new_due_amount
            ];
        $payment = invoices::where('id', $pay_id)
                    ->update($updateDetails);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment)
    {
        //
    }
}

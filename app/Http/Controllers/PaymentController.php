<?php

namespace App\Http\Controllers;

use DB;
use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new  =Payment::all();//->where('role_id', '=', '1');
        return view('Admin.payment_index',['payments'=>$new]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.addPayments');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id'=>'required|integer',
            'order_id'=> 'required|integer',
            'total_amount' => 'required',
            'payment_date' => 'required',
            'amount_paid' => 'required',
            'due_amount' => 'required'

        ]);
        $payment = new Payment([
            'customer_id' => $request->get('customer_id'),
            'order_id'=> $request->get('order_id'),
            'total_amount'=> $request->get('total_amount'),
            'payment_method' => $request->get('payment_method'),
            'payment_date'=> $request->get('payment_date'),
            'amount_paid'=> $request->get('amount_paid'),
            'due_amount'=> $request->get('due_amount')
        ]);
        $payment->save();
        return redirect('/adminPayments')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payfind = DB::table('payments')->where('order_id', '=', $id)->first();
        return view('Admin.payment_edit',['payments'=>$payfind]);

        /*$editdata = DB::table('staff')->where('staff_id','=',$id)->first();
        return View::make('staff',array('list' => $editdata));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'customer_id'=>'required',
            'order_id' => 'required',
            'total_amount' => 'required',
            'payment_date' => 'required',
            'amount_paid' => 'required',
            'due_amount' => 'required'
        ]);

        $payfind =DB::table('payments')->where('order_id', '=', $id);
        //$payfind = Payment::find($id);
        $payfind ->customer_id =$request ->customer_id;
        $payfind ->order_id =$request ->order_id;
        $payfind ->total_amount =$request ->total_amount;
        $payfind ->payment_date =$request ->payment_date;
        $payfind ->amount_paid =$request ->amount_paid;
        $payfind ->due_amount =$request ->due_amount;

        $payfind ->save();

        return redirect('/adminPayments')->with('success','Customer Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$payment = Payment::find($id);
        $payment>delete();
        return redirect('/adminPayments');*/

        DB::table('payments')->where('order_id', '=', $id)->delete();
        return redirect('adminPayments');
    }

}

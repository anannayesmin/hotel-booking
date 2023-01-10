<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function list(){
        //dd('hello');
        //return view('backend.page.payment.payment');
        $payment=Payment::all();
        return view('backend.page.payment.payment',compact('payment'));
    }

    public function create(){
        //dd('hello');
        return view('backend.page.payment.form');
     

    }

    

    public function submit(Request $request){
        $request->validate([
         'payment_guest_id'=>'required',
         'payment_date'=>'required',
         'payment_amount'=>'required',
         'payment_decription'=>'required'
        ]);


        Payment::create([
      'payment_guest_id'=>$request->payment_guest_id,
      'payment_date'=>$request->payment_date,
      'payment_amount'=>$request->payment_amount,
      'payment_decription'=>$request->payment_decription
        ]);

        return redirect()->back()->with('message','payement success');
    }

    public function delete($id){
        Payment::find($id)->delete();
        return back();
    }
    public function edit($id){
        $payment=Payment::find($id);
        return view('backend.page.payment.editForm',compact('payment'));
    }


    public function update(Request $request,$id){

        $payment=Payment::find($id);
        $payment->update([
            'payment_guest_id'=>$request->payment_guest_id,
            'payment_date'=>$request->payment_date,
            'payment_amount'=>$request->payment_amount,
            'payment_decription'=>$request->payment_decription
        ]);
        return redirect()->back()->with('message','update success');
    }

    
}

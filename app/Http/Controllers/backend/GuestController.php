<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use GMP;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function list(){
        //dd('hello');
        //return view('backend.page.guest');
        $guest=Guest::all();
        return view('backend.page.guest',compact('guest'));
    }
    public function create(){
        //dd('hello');
        return view('backend.page.guestForm');

    }

    public function submit(Request $request){

        //dd($request->all());
        $request->validate([
          
            'guest_name'=>'required',
            'guest_image'=>'required',
            'guest_phone_number'=>'required',
            'guest_email'=>'required',
            'guest_username'=>'required',
            'guest_password'=>'required',
            'guest_address'=>'required'
        ]);

        $fileName = null;
        if($request->hasFile('guest_image')){
             $fileName = 'Kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('guest_image')->getClientOriginalExtension();
                 //dd($fileName);
               $request->file('guest_image')->storeAs('/uploads/guest',$fileName);
        }

        Guest::create([
           
      'guest_name'=>$request->guest_name,
      'guest_image'=>$fileName,
      'guest_phone_number'=>$request->guest_phone_number,
      'guest_email'=>$request->guest_email,
      'guest_username'=>$request->guest_username,
      'guest_password'=>$request->guest_password,
      'guest_address'=>$request->guest_address,
        ]);

        //return redirect()->route('guest.list');
        return redirect()->back()->with('message','guest success');
    }

    public function delete($id){
        $guest=Guest::find($id)->delete();
        return back();
    }

    public function edit($id){
        $guest=Guest::find($id);
        return view('backend.page.editguestForm',compact('guest'));
    }
    public function update(Request $request,$id){
        $guest=Guest::find($id);
        $guest->update([
            'guest_id'=>$request->guest_id,
            'guest_name'=>$request->guest_name,
            'guest_phone_number'=>$request->guest_phone_number,
            'guest_email'=>$request->guest_email,
            'guest_username'=>$request->guest_username,
            'guest_password'=>$request->guest_password,
            'guest_address'=>$request->guest_address,
        ]);
        return redirect()->back()->with('message','update success');
    }
}

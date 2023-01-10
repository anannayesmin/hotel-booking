<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function setup(){
        //dd('hello');
       // return view('backend.page.hotel');
       //read//
       //$Hotel=Hotel::all();
       $hotel=Hotel::paginate(4);
       return view('backend.page.hotel',compact('hotel'));
    }
    public function create(){
        //dd('hello');
        return view('backend.page.hotelForm');
    }

    public function submit(Request $request){
        $request->validate([
            
            'hotel_name'=>'required',
            'hotel_image'=>'required',
            'hotel_phone_number'=>'required',
            'hotel_email'=>'required',
            'hotel_city'=>'required',
            'hotel_address'=>'required',
            'hotel_decription'=>'required'

        ]);

        $fileName = null;
        if($request->hasFile('hotel_image')){
                $fileName = 'Kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('hotel_image')->getClientOriginalExtension();
                // dd($fileName);
                $request->file('hotel_image')->storeAs('/uploads/hotel',$fileName);
        }
        //dd($request->all());
        Hotel::create([
            
        'hotel_name'=>$request->hotel_name,
        'hotel_phone_number'=>$request->hotel_phone_number,
        'hotel_email'=>$request->hotel_email,
        'hotel_city'=>$request->hotel_city,
        'hotel_address'=>$request->hotel_address,
        'hotel_decription'=>$request->hotel_decription,
        'hotel_image'=>$fileName
        ]);
        return redirect()->back()->with('message','Hotel created successfully');
    }
    //delete//
    public function delete($id){
        Hotel::find($id)->delete();
        return back();
    }

    //update//
    public function edit($id){
        //dd('hello');
        $hotel=Hotel::find($id);
        return view('backend.page.edithotelForm',compact('hotel'));
    }
    
    public function update(Request $request,$id){
       // dd('$request all()');
       
        $hotel=Hotel::find($id);
        $fileName = $hotel->hotel_image;
        if($request->hasFile('hotel_image')){
                $fileName = 'Kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('hotel_image')->getClientOriginalExtension();
                // dd($fileName);
                $request->file('hotel_image')->storeAs('/uploads/hotel',$fileName);
        }

        $hotel->update([
            
            
            'hotel_name'=>$request->hotel_name,
            'hotel_phone_number'=>$request->hotel_phone_number,
            'hotel_email'=>$request->hotel_email,
            'hotel_image'=>$fileName,
            'hotel_city'=>$request->hotel_city,
            'hotel_address'=>$request->hotel_address,
            'hotel_decription'=>$request->hotel_decription,
        ]);
        return redirect()->back()->with('message','update success');
    }
    
}

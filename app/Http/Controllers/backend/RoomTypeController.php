<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{

    public function type(){
        //return view('backend.page.roomtype.room');

        $roomtype=RoomType::all();
        return view('backend.page.roomtype.room',compact('roomtype'));

    }

    public function create(){
        return view('backend.page.roomtype.form');
    }

    public function submit(Request $request){

         $request->validate([
            'image'=>'required',
            'room_type'=>'required'
         ]);
       
         $fileName = null;
         if($request->hasFile('image')){
                 $fileName = 'Kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
                 // dd($fileName);
                 $request->file('image')->storeAs('/uploads/roomtype',$fileName);

        RoomType::create([
        'image'=>$fileName,
        'room_type'=>$request->room_type
        ]);

        return redirect()->back()->with('message','room create success');
    }

}

public function delete($id){
    RoomType::find($id)->delete();
    return redirect()->back();
}

public function edit($id){
    $roomtype=RoomType::find($id);
    return view('backend.page.roomtype.editform',compact('roomtype'));
}

public function update(Request $request,$id){
    $roomtype=RoomType::find($id);

    $fileName = null;
    if($request->hasFile('image')){
            $fileName = 'Kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
            // dd($fileName);
            $request->file('image')->storeAs('/uploads/roomtype',$fileName);

   $roomtype->update([
   'image'=>$fileName,
   'room_type'=>$request->room_type
   ]);

   return redirect()->back()->with('message','room update success');
}

}

}
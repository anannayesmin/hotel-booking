<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function list(){
        //dd('hello');
        //return view('backend.page.room.room');
        $room=Room::all();
        return view('backend.page.room.room',compact('room'));
    }
    public function create(){
        $hotels = Hotel::all();
        $roomType = RoomType::all();
        return view('backend.page.room.form',compact("hotels","roomType"));
    }

    public function submit(Request $request){
    
        $request->validate([
       'room_image'=>'required',
       'room_hotel_id'=>'required',
       "room_type_id" => "required",
       'room_number'=>'required',
       
       
        ]);

        $fileName = null;
        if($request->hasFile('room_image')){
                $fileName = 'Kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('room_image')->getClientOriginalExtension();
                // dd($fileName);
                $request->file('room_image')->storeAs('/uploads/rooms',$fileName);
        }

        Room::create([
            'room_image'=>$fileName,
            'hotel_id'=>$request->room_hotel_id,
           "room_type_id"=>$request->room_type_id,
            'room_number'=>$request->room_number,
            
        ]);
        return back()->with('message','room successfully');
    }
    public function delete($id){
        Room::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $room=Room::find($id);
        return view('backend.page.room.editroomForm',compact('Room'));
}
     public function update(Request $request,$id){

        
        $room=Room::find($id);

        $fileName = null;
        if($request->hasFile('room_image')){
                $fileName = 'Kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('room_image')->getClientOriginalExtension();
                // dd($fileName);
                $request->file('room_image')->storeAs('/uploads/rooms',$fileName);

        $room->update([
            'room_image'=>$fileName,
            'room_hotel_id'=>$request->room_hotel_id,
            'room_type'=>$request->room_type,
            'room_number'=>$request->room_number,
           
        ]);

        return redirect()->back()->with('message','update success');
     }
}
}
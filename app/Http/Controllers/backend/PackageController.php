<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Room;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function list(){
        $packages = Package::all();
        return view('backend.page.package.package',compact("packages"));
    }

    public function create(){
        $room  = Room::all();
        return view('backend.page.package.form',compact("room"));
    }

    public function submit(Request $request){
        $request->validate([
         'name'=>'required',
         'price'=>'required',
         'room_id'=>'required',
         'amenities'=>'required',
        ]);

        $amenities = [];

        foreach($request->amenities as $data){
            array_push($amenities,$data);
        }
        Package::create([

            'name'=>$request->name,
            'price'=>$request->price,
            'room_id'=>$request->room_id,
            'amenities'=>$amenities,
        ]);

        return redirect()->back()->with('message','package success');
    }

    public function delete($id){
        Package::find($id)->delete();
        return back();
    }

    public function edit($id){
        $packages=Package::find($id);
        return view('backend.page.package.editForm',compact("packages"));

       
    }
}

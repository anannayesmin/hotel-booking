<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    public function home(){
       // dd('hello');
        return view('frontend.master');
    }

    public function page(){
        // dd('hello');
         return view('frontend.page.homePage');
     }

     public function room(){
         //dd('hello');
        return view('frontend.page.room');
     }


     public function Regsubmit(Request $request){
        User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'username'=>$request->name,
        'password'=>bcrypt($request->password)

        ]);
        notify()->success('Laravel Notify is awesome!');
        return redirect()->back();

     }
     public function Front_login(Request $request){
        $credentials=$request->except('_token');
        $authentication=auth()->attempt($credentials);
        if($authentication){
            notify()->success('Login Succesful');

            return to_route('home');
            
        }
        else{
            return back();
        }

     }
public function Front_logout(){
    auth()->logout();
    notify()->success('Logout Succesful');
return back();

}



}

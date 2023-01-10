<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regForm(){
        return view('auth.register');
    }

    public function regFormSubmit(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'username'=>'required|unique:users,username',
            'password'=>'required'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
       ]);
       return back()->with('success','registration successfull');
    
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function loginFormSubmit(Request $request){
        $credentials=$request->except('_token');
        //dd($credentials);
        $credentials=auth()->attempt($credentials);
        if($credentials){
            return to_route('Nice.Admin')->with('success','login successfull');
        }else{
            return to_route('loginForm');
        }
    }

    public function logout(){
        auth()->logout();
        return to_route('loginForm')->with('success','logout sucessfull');
    }
}

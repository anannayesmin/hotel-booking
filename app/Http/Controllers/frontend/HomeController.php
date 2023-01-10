<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

}

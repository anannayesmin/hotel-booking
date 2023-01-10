<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pages(){
       // dd('hello');
       return view('frontend.page.pages');
    }

    public function details(){
        // dd('hello');
        return view('frontend.roomDetails.details');
     }
}

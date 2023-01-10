<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingDetailsController extends Controller
{
    public function details(){
        //dd('hello');

        return view('backend.page.bookingDetails.details');
    }

    public function create(){
        //dd('hello');

        return view('backend.page.bookingDetails.form');
    }
}

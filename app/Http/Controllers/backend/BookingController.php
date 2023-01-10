<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list(){

        return view('backend.page.booking.booking');
    }

    public function create(){

        return view('backend.page.booking.bookingForm');
    }
}

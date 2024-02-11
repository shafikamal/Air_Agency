<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\NewTicket;
use Illuminate\Http\Request;

class flightDateController extends Controller
{
    public function showFlightDate(){
        $tickets=NewTicket::with('customer')->orderBy('flight_date','asc')->get();
        //dd($tickets->toArray());
        return view('user.flightDate',compact('tickets'));
    }
}

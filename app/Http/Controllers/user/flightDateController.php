<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\NewTicket;
use App\Models\Ticket;
use Illuminate\Http\Request;

class flightDateController extends Controller
{
    public function showFlightDate(){
        $tickets=Ticket::with('customer')->orderBy('flight_date','asc')->get();
        //dd($tickets->toArray());
        return view('user.flightDate',compact('tickets'));
    }
}

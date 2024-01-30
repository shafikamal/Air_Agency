<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\NewTicket;

class userController extends Controller
{
    public function showHome(){
        return view('user.landingPage');
    }

    public function show(){
        NewTicket::create([
            'search'=>Customer::where('name','LIKE','%'.\request('net_fare'.'%')->get())

        ]);
    }
}

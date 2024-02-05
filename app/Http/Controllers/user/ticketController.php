<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\NewTicket;

class ticketController extends Controller
{
    public function showTicket(){
        $customers=Customer::all();
        return view('user.createTicket',compact(['customers']));
    }

    public function ticket(){
        $customer=Customer::where('name',request('customer_name'))->first();
        $ticket=NewTicket::create([
            'customer_id'=>$customer->id,
            'name'=>\request('name'),
            'airlines_name'=>\request('airlines_name'),
            'route'=>\request('route'),
            'flight_date'=>\request('flight_date'),
            'gross_fare'=>\request('gross_fare')

        ]);

        $balance=$customer->balance;
        $customer->update([
            'balance'=>$balance + request('gross_fare')
        ]);
        return  redirect()->route('statementShow');

    }

}

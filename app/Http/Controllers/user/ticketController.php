<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\NewTicket;
use App\Models\Ticket;

class ticketController extends Controller
{
    public function showTicket(){
        $customers=Customer::all();
        return view('user.createTicket',compact(['customers']));
    }

    public function ticket(){
        $this->validate(request(),[
//            'customer_id'=>'required',
            'name'=>'required',
            'airlines_name'=>'required',
            'route'=>'required',
            'flight_date'=>'required',
            'gross_fare'=>'required'
        ]);

        $customer=Customer::where('name',request('customer_name'))->first();
        $ticket=Ticket::create([
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

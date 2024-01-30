<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\NewTicket;

class ticketController extends Controller
{
    public function showTicket($id){;
        return view('user.createTicket',compact('id'));
    }

    public function ticket($id){
        $ticket=NewTicket::create([
            'customer_id'=>request('customer_id'),
            'name'=>\request('name'),
            'airlines_name'=>\request('airlines_name'),
            'route'=>\request('route'),
            'flight_date'=>\request('flight_date'),
            'gross_fare'=>\request('gross_fare')

        ]);

        $customer=Customer::find($id);
        $balance=$customer->balance;
        $customer->update([
            'balance'=>$balance + request('gross_fare')
        ]);
        return  redirect()->route('statementShow');

    }

}

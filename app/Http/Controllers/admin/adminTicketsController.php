<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewTicket;

class adminTicketsController extends Controller
{
    public function showTickets(){
        $tickets= NewTicket::where('status','pending')->paginate(10);;
            return view('admin.pendingTickets', compact('tickets'));

    }

    public function approveTickets(){

        $this->validate(request(),[
            'ticket_id'=>'required',
            'net_fare'=>'required'
        ]);

        $ticket=NewTicket::find(request('ticket_id'));
        $ticket->update([
            'net_fare'=>request('net_fare'),
            'status'=>'check_out'
        ]);
        return redirect()->back();

    }
}

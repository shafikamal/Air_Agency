<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewTicket;

class adminTicketsController extends Controller
{
    public function showTickets(){
        $tickets= NewTicket::all();;
            return view('admin.pendingTickets', compact('tickets'));


    }

    public function approveTickets($id){

        $ticket=NewTicket::find($id);
        $ticket->update([
            'net_fare'=>request('net_fare'),
            'status'=>'check_out'
        ]);
        return 'ok';

    }
}

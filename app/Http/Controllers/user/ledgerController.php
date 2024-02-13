<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\NewTicket;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ledgerController extends Controller
{
    public function showLedger($id,$name){
        $tickets=Ticket::where('customer_id',$id)->orderBy('created_at', 'desc')->get();

        $totalDebit=$tickets->sum('gross_fare');
        $totalCredit=$tickets->sum('deposit');
        $totalDue=$tickets->sum('gross_fare')-$tickets->sum('deposit');
        return view('user.ledger',compact(['tickets','name','totalDebit','totalCredit','totalDue']));
    }
}

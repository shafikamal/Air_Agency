<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\NewTicket;
use Illuminate\Http\Request;

class ledgerController extends Controller
{
    public function showLedger($id,$name){
        $tickets=NewTicket::where('customer_id',$id)->get();
        return view('user.ledger',compact(['tickets','name']));
    }
}

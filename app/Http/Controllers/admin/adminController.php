<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;

class adminController extends Controller
{
    public function showHome(){

        $dailyTicket=Ticket::whereBetween('created_at', [now()->startOfDay(), now()])->where('status','check_out')->get();
        $weeklyTicket=Ticket::whereBetween('created_at', [now()->subWeek(), now()])->where('status','check_out')->get();
        $monthlyTicket=Ticket::whereBetween('created_at', [now()->subMonth(), now()])->where('status','check_out')->get();

        $pending=Ticket::where('status','pending')->count();

        $dailyProfit=$dailyTicket->sum('gross_fare')-$dailyTicket->sum('net_fare');
        $weeklyProfit=$weeklyTicket->sum('gross_fare')-$weeklyTicket->sum('net_fare');
        $monthlyProfit=$monthlyTicket->sum('gross_fare')-$monthlyTicket->sum('net_fare');

        return view('admin.landingPage',compact(['dailyProfit','weeklyProfit','monthlyProfit','pending']));
    }
}

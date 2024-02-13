<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\MoneyRecipt;
use App\Models\Receipt;
use Illuminate\Http\Request;

class receiptController extends Controller
{
    public function showReceipt(){
        $customers=Customer::get();
        return view('user.receipt',compact('customers'));
    }

    public function receipt(){
        $this->validate(\request(),[
            'customer_name'=>'required',
            'in_word'=>'required',
            'amount'=>'required',
            'pay_by'=>'required',
            'purpose'=>'required'
        ]);

        $customer=Customer::where('name',\request('customer_name'))->first();

        $ticket=Receipt::create([
            'customer_id'=>$customer->id,
            'purpose'=>\request('purpose'),
            'amount_in_word'=>\request('in_word'),
            'amount'=>\request('amount'),
            'pay_by'=>\request('pay_by')
        ]);

        $ticket->ticket()->create([
            'customer_id'=>$customer->id,
            'pay_by'=>\request('pay_by'),
            'deposit'=>\request('amount'),
            'status'=>'check_out'
        ]);

        $balance=$customer->balance;
        $customer->update([
            'balance'=>$balance-\request('amount')
        ]);

        return redirect()->route('statementShow');
    }
}

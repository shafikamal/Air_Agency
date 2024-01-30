<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class statementController extends Controller
{
    public function showStatement(){
        $customers=Customer::get();
        return view('user.statement',compact('customers'));
    }

}

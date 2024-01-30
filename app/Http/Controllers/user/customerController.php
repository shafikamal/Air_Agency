<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class customerController extends Controller
{
    public function showCustomer(){
        return view('user.customer');
    }

    public function customer(){
        $this->validate(\request(),[
            'name'=>'required',
            'number' => 'required|min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'office'=>'required',
            'address'=>'required'
        ]);


        Customer::create([
            'name'=>\request('name'),
            'number'=>\request('number'),
            'office'=>\request('office'),
            'address'=>\request('address'),
            'balance'=>'0'
        ]);
        return redirect()->route('statementShow')->with('message','Customer Details Added');
    }


    //EDIT CUSTOMER
    public function showEditCustomer($id){
        $customer = Customer::find($id);
        return view('user.editCustomer',compact('customer'));

    }

    public function editCustomer($id){
        $customer = Customer::find($id);
        $customer->update([
            'name'=>\request('name'),
            'number'=>\request('number'),
            'office'=>\request('office'),
            'address'=>\request('address')
        ]);
        return redirect()->route('statementShow');
    }
}

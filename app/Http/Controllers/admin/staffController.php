<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class staffController extends Controller
{
    public function showStaff(){
        $customers=User::get();
        return view('admin.staffShow',compact('customers'));
    }

    public function updateStaff($id){

        User::find($id)->update([
            'status'=>\request('status') == 'active'? \request('status'):'inactive'
        ]);
        return redirect()->back();
    }
}

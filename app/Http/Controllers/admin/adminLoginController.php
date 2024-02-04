<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class adminLoginController extends Controller
{
    public function showAdminLogin(){
        return view('admin.adminLogin');

    }

    public function adminLogin(){

        $this->validate(request(),[
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::guard('admin')->attempt([
            'email'=>\request('email'),
            'password'=>\request('password')
        ])){
            return redirect()->route('adminShow');
        }else{
            return 'Credential Mismatch';
        }

    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('adminLoginShow');
    }
}

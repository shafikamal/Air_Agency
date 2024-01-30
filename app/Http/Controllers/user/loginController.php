<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    //REGISTER
    public function showRegister(){
        return view('user.register');

    }
    public function register(){
        $this->validate(\request(),[
            //'username'=>'required|min:4|unique:users',
            'email'=>'required|unique:users',
            'password'=>'confirmed|required',
        ]);

        User::create([
            'username'=>\request('firstName').' '.\request('lastName'),
            'email'=>\request('email'),
            'password'=>bcrypt(\request('password'))
        ]);
        return back()->with('message','Registration has successfully done');

    }

    //LOGIN
    public function showLogin(){
        return view('user.login');
    }

    public function login(){
        $this->validate(\request(),[
            'email'=>'required',
            'password'=>'required'
        ]);

        if (Auth::attempt([
            'email'=>\request('email'),
            'password'=>\request('password')
        ])){
            return redirect()->route('home');
        }else{
            return 'credential mismatch';
        }
    }

    //LOGOUT
    public function logout(){
        Auth::logout();
        return redirect()->route('loginShow');
    }
}

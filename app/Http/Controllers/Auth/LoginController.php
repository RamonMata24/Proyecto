<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{   

    public function __construct(){
        $this->middleware('guest',['only'=>'showLoginForm']);
    }
 
    public function showLoginForm(){
        return view('login.login');
    }

    public function login(){

        $credentials = $this->validate(request(),[

            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        //return $credentials;

        if( Auth::attempt($credentials) ){

            return redirect()->route('inicio');

        }
            return back()
            ->withErrors(['email'=>trans('auth.failed')]);
            
    } 


    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}

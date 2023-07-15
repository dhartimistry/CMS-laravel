<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('login');
    }

    public function login(Request $request)
    {      

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
          return redirect()->intended('companies');
        }else{
            return redirect()->back()->with('error', 'Invalid credentials.');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/log');
    }


}

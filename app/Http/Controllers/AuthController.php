<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //
    public function register(){
        $countries = DB::select('select * from countries');

        return view('register', [
           'countries' => $countries
        ]);
    }

    public function index(){
        return view('login', [
        ]);
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/');
        }

        return view('login')->withErrors([
            "The credentials doesn't match"
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

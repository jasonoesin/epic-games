<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //
    public function register_index(){
        $countries = DB::select('select * from countries');

        return view('register', [
           'countries' => $countries
        ]);
    }

    public function login_index(){
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

    public function register(Request $request){

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'date' => ['required'],
            'country' => ['required'],
            'name'=> ['required']
        ]);

        if($request->country == 0){
            return view('register')->withErrors([
                "Please select a country !"
            ]);
        }

        $input =  $request->all([
            'email',
            'password',
            'name'
        ]);

        $input['password'] = bcrypt($request->password);
        $input['dob'] = $request->date;
        $input['country_id'] = $request->country;


        try {
            User::factory()->create(
                $input
            );

            return redirect('login');
        }
        catch (Exception $e) {
            return redirect('/register')->withErrors([
                "An error has occurred please try again !"
            ]);
        }

    }
}

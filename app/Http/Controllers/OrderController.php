<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //

    public function index(Request $request){

        $game = DB::select('select * from games where id = ?', [$request->game_id]);

        return view('order',[
            'game'=> $game[0]
        ]);
    }
}

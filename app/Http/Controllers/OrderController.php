<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class OrderController extends Controller
{
    //

    public function index(Request $request){

        $game = DB::select('select * from games where id = ?', [$request->game_id]);

        return view('order',[
            'game'=> $game[0]
        ]);
    }

    public function order(Request $request){
        $user = Auth::user();

        if($request->agree != null){
            DB::insert('insert into orders values(null, ?, ?) ', [$user->id, $request->id]);

            DB::delete('delete from wishlists where user_id = ? and game_id = ?', [$user->id, $request->id]);

            return redirect('owned');
        }

        $game = DB::select('select * from games where id = ?', [$request->id]);

        return view('order',[
            'game'=> $game[0]
        ])->withErrors([
            "You must agree with the terms provided to purchase this game !"
        ]);
    }

    public function owned_index(Request $request){
        $user = Auth::user();

        $owned = DB::select('select * from orders where user_id = ?', [$user->id]);

        $games = [];
        foreach ($owned as $item){
            $data = DB::select('select * from games where id = ?', [$item->game_id]);

            array_push($games,
                $data[0]
            );
        }

        return view('owned',
            [
                'games'=> $games
            ]
        );
    }
}

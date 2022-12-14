<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function order(Request $request){
        $user = Auth::user();

        if($request->agree != null){
            DB::insert('insert into orders values(null, ?, ?) ', [$user->id, $request->id]);

            return redirect('owned');
        }

        return redirect('/');
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

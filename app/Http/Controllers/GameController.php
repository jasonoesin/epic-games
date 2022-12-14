<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    //
    public function index(){
        $free = Arr::random(
            DB::select('select * from games where price = discount'),
            4
        ) ;

        $top_sellers = DB::select('select * from games order by total_sold desc limit 4');
        $most_played = DB::select('select * from games order by total_played desc limit 4');
        $newest = DB::select('select * from games order by \'release\' desc limit 4');

        $sale = Arr::random(
            DB::select('select * from games where discount != 0 and discount != price'),
            3
        );


        return view('welcome',
            [
                'free' => $free,
                "top_sellers"=>$top_sellers,
                "most_played"=>$most_played,
                'newest'=> $newest,
                'sale'=>$sale
            ]);
    }

    public function detail($id){
        $game = DB::select('select * from games where id = ?', [$id]);

        $genre_details = DB::select('select genre_id from genre_details where game_id = ?', [$id]);

        $feature_details = DB::select('select f.name from feature_details fd join games g on fd.game_id = g.id join features f on f.id = fd.feature_id where game_id = ?', [$id]);

        $query = "select name from genres where id in (" . implode(",",collect($genre_details)->pluck('genre_id')->toArray()) .")";

        $genres = DB::select($query);


        $user = Auth::user();

        $wishlisted = false;
        $bought = false;

        if($user){
            $wishlisted = DB::select('select * from wishlists where user_id = ? and game_id = ?', [$user->id, $id]);
            $bought = DB::select('select * from orders where user_id = ? and game_id = ?', [$user->id, $id]);
        }

        return view('game',
            [
                'game' => $game[0],
                'genres' => collect($genres)->pluck('name'),
                'features' => $feature_details,
                'wishlisted'=> ($wishlisted) ? true : false,
                'bought'=> ($bought) ? true : false
            ]);
    }
}

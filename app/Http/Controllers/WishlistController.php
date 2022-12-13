<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\s;

class WishlistController extends Controller
{
    //

    public function index(){
        $user = Auth::user();

        $wishlists = DB::select('select * from wishlists where user_id = ?', [$user->id]);


        $games = [];
        foreach ($wishlists as $item){

            $data = DB::select('select * from games where id = ?', [$item->game_id]);

            array_push($games,
                $data[0]
            );
        }

        return view('wishlist',
            [
                'games'=> $games
            ]
        );
    }

    public function wishlist($id){
        $user = Auth::user();

        $data = DB::select('select * from wishlists where user_id = ? and game_id = ?', [$user->id, $id]);
        if(!$data){
            DB::insert('insert into wishlists value(NULL, ? , ?)', [$user->id,  $id]);
        }else{
            DB::delete('delete from wishlists where user_id = ? and game_id = ?', [$user->id,  $id]);
        }

        return redirect()->back();
    }
}

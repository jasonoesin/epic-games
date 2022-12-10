<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function index(){
        $genres = DB::select('select * from genres');

        $array = array();
        foreach($genres as $item){
            $games = DB::select('select games.* from games join genre_details on games.id = genre_details.game_id where genre_id = ?', [$item->id]);

            $games = Arr::random(
                DB::select('select games.* from games join genre_details on games.id = genre_details.game_id where genre_id = ?', [$item->id]),
                (count($games) < 3 ) ? count($games) : 3
            );

            array_push($array
            , (object)[
                    'id'=> $item->id,
                    'name'=> $item->name,
                    'games' => $games
                ]);
        }

        return view('genre', ['genres' => $array]);
    }

    public function detail($id){

        $name = '%'.$id.'%';

        $genre = DB::select('select * from genres where genres.name like ?', [$name]);


        $games = DB::select('select games.* from games join genre_details on games.id = genre_details.game_id where genre_id = ?', [$genre[0]->id]);

        return view('genre-detail', [
            'genre'=> $genre[0],
            'games' => $games
        ]);
    }
}

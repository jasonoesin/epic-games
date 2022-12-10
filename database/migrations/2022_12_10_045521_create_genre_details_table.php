<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('genre_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->references('id')->on('games')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('genre_id')->references('id')->on('genres')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('genre_details');
    }
}

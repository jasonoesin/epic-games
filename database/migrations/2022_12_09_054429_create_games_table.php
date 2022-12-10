<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("price");

            $table->integer("discount");
            $table->longText("description");
            $table->string("developer");
            $table->string("publisher");
            $table->timestamp("release");

            $table->string("platform");
            $table->float("rating");
            $table->string("os");
            $table->string("cpu");
            $table->string("memory");

            $table->string("gpu");
            $table->string("directx");
            $table->string("storage");
            $table->string("image");
            $table->integer("total_played");
            $table->integer("total_sold");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}

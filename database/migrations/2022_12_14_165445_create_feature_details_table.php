<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->references('id')->on('games')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('feature_id')->references('id')->on('features')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('feature_details');
    }
}

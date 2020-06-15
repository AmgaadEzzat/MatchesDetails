<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('home_team');
            $table->string('away_team');
            $table->string('date');
            $table->integer('score_home_team');
            $table->integer('score_away_team');
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
        Schema::dropIfExists('matchdetails');
    }
}

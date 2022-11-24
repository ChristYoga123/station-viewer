<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_and_stations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("train_id")->constrained();
            $table->foreignId("station_id")->constrained();
            $table->time('arrival')->default(now());
            $table->time('late')->default(now());
            $table->integer('delay');
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
        Schema::dropIfExists('train_and_stations');
    }
};

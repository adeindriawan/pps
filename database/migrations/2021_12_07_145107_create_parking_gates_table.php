<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingGatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_gates', function (Blueprint $table) {
            $table->id();
            $table->enum('direction', ['In', 'Out']);
            $table->enum('type', ['Car', 'Motorcycle']);
            $table->integer('car_capacity')->default(20);
            $table->integer('motorcycle_capacity')->default(50);
            $table->integer('car_occupancy')->default(0);
            $table->integer('motorcycle_occupancy')->default(0);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('parking_gates');
    }
}

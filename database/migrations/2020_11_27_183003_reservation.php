<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->string('baby_idt')->nullable();
			$table->string('baby_name')->nullable();
			$table->string('baby_image')->nullable();
			$table->string('Package')->nullable();
			$table->string('Payment')->nullable();
			$table->string('Transaction_id')->nullable();
			$table->string('Reservation_date')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}

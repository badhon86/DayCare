<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Monitor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitor', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->integer('serial')->nullable();
			$table->string('idt')->nullable();
			$table->string('name')->nullable();
			$table->string('attendance')->nullable();
			$table->string('activity')->nullable();
			$table->string('date')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitor');
    }
}

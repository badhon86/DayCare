<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->string('name')->nullable();
			$table->text('position')->nullable();
			$table->string('thumb_image')->nullable();
			$table->string('image')->nullable();
			$table->string('linkedin')->nullable();
			$table->string('facebook')->nullable();
			$table->string('twitter')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}

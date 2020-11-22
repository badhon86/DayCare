<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BabyRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baby_registration', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->string('baby_id')->nullable();
			$table->text('baby_name')->nullable();
			$table->string('birthdate')->nullable();
			$table->string('gender')->nullable();
			$table->string('mother name')->nullable();
			$table->string('father name')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('address')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baby_registration');
    }
}

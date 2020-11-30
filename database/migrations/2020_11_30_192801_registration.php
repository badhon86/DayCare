<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->string('baby_name')->nullable();
			$table->string('gender')->nullable();
			$table->string('baby_image')->nullable();
			$table->string('birth_certificate')->nullable();
			$table->string('father_name')->nullable();
			$table->string('mother_name')->nullable();
			$table->string('email')->nullable();
			$table->string('mobile_no1')->nullable();
			$table->string('mobile_no2')->nullable();
			$table->string('tel')->nullable();
			$table->string('present_address')->nullable();
			$table->string('parmanant_address')->nullable();
			$table->string('father_occupation')->nullable();
			$table->string('mother_occupation')->nullable();
			$table->string('dear visitor ,')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration');
    }
}

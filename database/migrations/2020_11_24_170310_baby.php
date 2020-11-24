<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Baby extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baby', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->text('baby_name')->nullable();
			$table->string('birth_certificate')->nullable();
			$table->string('gender')->nullable();
			$table->string('father')->nullable();
			$table->string('mother')->nullable();
			$table->string('email')->nullable();
			$table->integer('phone')->nullable();
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
        Schema::dropIfExists('baby');
    }
}

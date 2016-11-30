<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherRate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_rates', function (Blueprint $table) {
            $table->increments('id');

            $table->double('rate', 15, 2)->default('0.0');

            $table->integer('teacher_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->unique( array('teacher_id','user_id') );

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
        Schema::dropIfExists('teacher_rates');
    }
}

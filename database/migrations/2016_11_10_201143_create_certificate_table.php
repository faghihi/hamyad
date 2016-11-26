<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // certificate is a pivot table between user and course
        Schema::create('certificate', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('point')->nullable();
            $table->text('description')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('course_id')->unsigned();

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
        Schema::dropIfExists('certificate');
    }
}

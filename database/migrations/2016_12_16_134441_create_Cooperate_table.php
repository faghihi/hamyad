<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCooperateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooperate', function($table)
        {
            $table->increments('id');
            $table->string('email');
            $table->string('name');
            $table->string('phone');
            $table->text('description');
            $table->string('resume_link')->nullable();
            $table->string('sample_link')->nullable();
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
        Schema::drop('cooperate');
    }
}

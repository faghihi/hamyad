<?php

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('link');
            $table->integer('part');
            $table->integer('time')->default('0');

            $table->integer('course_id')->unsigned()->index();

            $table->timestamps();

            /*
             * If you soft delete
             * something it is still there so it's able to be
             * recovered (un-deleted) Hard delete,
             * or permanent delete, deletes it
             * off your database for good.
             * So you would not be able
             * to get that post back !
             * unless you had a backup
             */
            $table->softDeletes();
            $table->index(['deleted_at']);
        });

        Schema::table('sections', function($table) {
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title');
            $table->integer('pack_id');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->double('price_day', 15, 2)->default(0.0);
            $table->double('price_month', 15, 2)->default(0.0);
            $table->double('price_year', 15, 2)->default(0.0);

            $table->integer('course_id')->nullable()->unsigned()->index();
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
        Schema::table('packs', function($table) {
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
        Schema::dropIfExists('packs');
    }
}

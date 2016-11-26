<?php
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class CreateUserActionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('user_actions', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();

            # Action items
            $table->string('action');
            $table->string('action_model')->nullable();
            $table->integer('action_id')->nullable();

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

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_actions');
    }
}


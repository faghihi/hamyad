<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpgradeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
            $table->string('phone')->unique()->nullable(false)->change();
            $table->string('password',255)->nullable()->change();
            $table->dropColumn('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->change();
            $table->dropUnique('users_phone_unique');
            $table->string('phone')->nullable()->change();
            $table->boolean('admin')->default(0);
            $table->string('password',255)->change();
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('User_names');
            $table->dateTime('User_DOBs');
            $table->char('User_accounts');
            $table->char('User_passwords');
            $table->unsignedBigInteger('User_role');
            $table->timestamps();
            
        });
        Schema::table('users', function ($table) {
            $table->foreign('User_role')->references('id')->on('users_role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

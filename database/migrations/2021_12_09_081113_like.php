<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Like extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like', function (Blueprint $table) {
            $table->id();
            $table->integer('liker_id')->unsigned()->nullable()->index();
            $table->foreign('liker_id')->references('id')->on('users');
            $table->unsignedBigInteger('blog_id')->unsigned()->nullable()->index();
            $table->foreign('blog_id')->references('id')->on('blog');
            
            $table->timestamps();
           
        });

        Schema::table('like', function($table){
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

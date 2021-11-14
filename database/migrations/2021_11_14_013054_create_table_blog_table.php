<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Cat_id');
            $table->string('Blog_headings');
            $table->integer('Blog_Seen_Nums');
            $table->mediumText('Blog_contents');
            $table->string('Blog_displays');
            $table->string('Blog_tags');
            $table->timestamps();
            $table->foreign('Cat_id')->references('id')->on('catalogue');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}

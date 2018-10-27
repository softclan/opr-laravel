<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title', 80);
            $table->string('title_slug');
            $table->string('category');
            $table->string('first_tag', 30);
            $table->string('second_tag',30)->nullable();
            $table->string('third_tag', 30)->nullable();
            $table->text('content');
            $table->tinyInteger('visible')->default(0);
            $table->tinyInteger('delete')->default(0);
            $table->timestamps();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

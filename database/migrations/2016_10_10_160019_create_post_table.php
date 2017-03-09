<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('harambe_post', function (Blueprint $table) {
      $table->increments('id');
      $table->string('firstname');
      $table->string('lastname');
      $table->string('gender');
      $table->string('bmonth');
      $table->integer('bday');
      $table->integer('byear');
      $table->string('course');
      $table->integer('year');
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
        Schema::drop('blog_post');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function(Blueprint $t) {
           $t->increments('id');
           $t->unsignedInteger('user_id');
           $t->foreign('user_id')->references('id')->on('users');
           //$t->unsignedInteger('tag_id');
           //$t->foreign('tag_id')->references('id')->on('users');
           $t->string('filename', 255);
           $t->string('file_size', 255);
           $t->string('vid_format', 100);
           $t->string('duration', 100);
           $t->string('vid_bitrate', 100);
           $t->string('location', 255);
           $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('videos');
    }
}

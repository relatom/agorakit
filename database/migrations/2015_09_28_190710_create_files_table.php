<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilesTable extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->text('path')->nullable();
            $table->text('name')->nullable();
            $table->text('original_filename')->nullable();
            $table->text('original_extension')->nullable();
            $table->text('mime')->nullable();
            $table->integer('user_id')->unsigned()->references('id')->on('users')->nullable();
            $table->integer('group_id')->unsigned()->index()->references('id')->on('groups')->nullable();
        });
    }

    public function down()
    {
        Schema::drop('files');
    }
}

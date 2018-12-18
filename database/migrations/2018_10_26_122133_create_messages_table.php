<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('type', 6);
            $table->string('from', 16);
            $table->string('to', 16);
            $table->string('title', 64);
            $table->text('content');
            $table->timestamp('date');
            $table->timestamp('read')->nullable(true)->default(null);
            $table->timestamp('delete_at')->nullable(true);
        });

        Schema::table('messages', function($table)
        {
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
        Schema::dropIfExists('messages');
    }
}

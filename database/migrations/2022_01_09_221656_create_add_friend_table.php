<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddFriendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_friend', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('request')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('target')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('status')->default(2);
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
        Schema::dropIfExists('add_friend');
    }
}

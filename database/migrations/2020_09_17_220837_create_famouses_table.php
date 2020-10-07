<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('famouses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->string('avatar')->nullable();
            $table->bigInteger('vat')->nullable();
            $table->string('name');
            $table->string('brief');
            $table->string('instagram');
            $table->bigInteger('instagram_num');
            $table->string('snap');
            $table->bigInteger('snap_num');
            $table->string('twitter');
            $table->bigInteger('twitter_num');
            $table->string('region')->nullable();
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
        Schema::dropIfExists('famouses');

    }
}

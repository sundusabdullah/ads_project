<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegotiateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negotiate', function (Blueprint $table) {
            $table->id();

            // offer information
            $table->unsignedBigInteger('fixed_id');
            $table->foreign('fixed_id')
            ->references('id')
            ->on('fixeds');

            // the id of the user who send the message.
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
            	->on('users');
                
            $table->longText('message');

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
        Schema::dropIfExists('negotiate');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixeds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender');
            $table->foreign('sender')
            	->references('id')
            	->on('users');
	        $table->unsignedBigInteger('receiver');
            	$table->foreign('receiver')
            	->references('id')
            	->on('users');
		    $table->unsignedBigInteger('services_id');
            	$table->foreign('services_id')
            	->references('id')
                ->on('services');
            $table->string('service_name');
            $table->string('place');
            $table->string('price');
            $table->time('time');
            $table->date('date');
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('fixeds');
    }
}

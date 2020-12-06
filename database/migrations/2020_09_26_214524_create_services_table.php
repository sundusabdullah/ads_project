<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
            
            //instagram
            $table->string('services_instagram_name')->nullable();
            $table->string('services_instagram_price')->nullable();
    
            //snapchat
            $table->string('services_snapchat_name')->nullable();
            $table->string('services_snapchat_price')->nullable();

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
        Schema::dropIfExists('services');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('user_name');
            
            $table->string('service_name');

            $table->string('famouses_name');
            $table->foreign('famouses_name')
                ->references('name')
                ->on('famouses');

            $table->bigInteger('famouses_vat');
            $table->foreign('famouses_vat')
                    ->references('vat')
                    ->on('famouses');
            
            $table->enum('sataus', ['pending', 'processing', 'completed', 'decline'])->default('pending');

            $table->float('grand_total');

            $table->boolean('is_paid')->default(false);
            
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
        Schema::dropIfExists('orders');
    }
}

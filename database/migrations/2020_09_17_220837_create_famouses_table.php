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
            $table->bigInteger('vat')->unique();//الضريبة
            $table->string('name')->unique();//الإسم
            $table->string('brief');//نبذه
            $table->string('email')->nullable();//الإيميل
            $table->string('region')->nullable();//المناطق الاكثر انتشار
            $table->string('interests')->nullable();//الإهتمامات
            $table->string('nationality')->nullable();//الجنسية
            $table->string('male_follow')->nullable();//المتابعين الذكور
            $table->string('female_follow')->nullable();//المتابعين الإناث
            $table->string('ins_link')->nullable();//رابط انستقرام
            $table->string('snap_link')->nullable();//رابط سناب
            $table->string('youtube_link')->nullable();//رابط يوتيوب
            $table->string('twitter_link')->nullable();//رابط تويتر
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

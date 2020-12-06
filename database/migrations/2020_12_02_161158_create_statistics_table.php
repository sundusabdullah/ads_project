<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            //instagram
            $table->integer('follow_instagram');//عدد المتابعين في حساب انستجرام
            $table->integer('age_instagram');//الاعمار الاكثر شعبية
            $table->string('spreading_instagram');//الانشار الاقليمي
            $table->integer('percentage_instagram');//النسبة

            //snapchat
            $table->integer('min_snapchat');//عدد دقائق المشاهدات في حساب سناب شات
            $table->integer('age_snapchat');//الاعمار الاكثر شعبية
            $table->integer('story_snapchat');//عدد مشاهدات القصة في حساب سناب شات
            $table->string('day_snapchat');//المشاهدات خلال ايام الاسبوع
            $table->string('follow_snapchat');//العدد

            // //twitter
            // $table->integer('follow_twitter');
            // $table->integer('impression_twitter');
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
        Schema::dropIfExists('statistics');
    }
}

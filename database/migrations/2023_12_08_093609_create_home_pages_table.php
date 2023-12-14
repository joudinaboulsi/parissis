<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_s1')->nullable();
            $table->text('text_s1')->nullable();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();

            $table->string('img1')->nullable();
            $table->string('alt1')->nullable();
            $table->string('img2')->nullable();
            $table->string('alt2')->nullable();
            $table->string('img3')->nullable();
            $table->string('alt3')->nullable();
            $table->string('t1')->nullable();
            $table->string('t2')->nullable();
            $table->string('t3')->nullable();
            $table->text('p1')->nullable();
            $table->text('p2')->nullable();
            $table->text('p3')->nullable();


            $table->string('title_s2')->nullable();
            $table->text('text_s2')->nullable();
            $table->string('subtitle_s2')->nullable();
            $table->string('image_s2')->nullable();


            $table->integer('counter1')->nullable();
            $table->string('subtitle_counter1')->nullable();

            $table->integer('counter2')->nullable();
            $table->string('subtitle_counter2')->nullable();

            $table->integer('counter3')->nullable();
            $table->string('subtitle_counter3')->nullable();

            $table->string('link1')->nullable();
            $table->string('link2')->nullable();
            $table->string('title_project')->nullable();
            $table->string('title_client')->nullable();
            $table->string('title_news')->nullable();
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
        Schema::dropIfExists('home_pages');
    }
}

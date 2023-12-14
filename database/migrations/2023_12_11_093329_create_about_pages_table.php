<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_header')->nullable();
            $table->string('subtitle_header')->nullable();
            $table->string('image_header')->nullable();


            $table->string('title_s1')->nullable();
            $table->string('image_s1')->nullable();
            $table->text('text_s1')->nullable();
            $table->string('link_s1')->nullable();
            $table->string('link_url')->nullable();

            $table->string('img1_s1')->nullable();
            $table->string('alt1')->nullable();

            $table->string('img2_s1')->nullable();
            $table->string('alt2')->nullable();
            $table->string('img3_s1')->nullable();
            $table->string('alt3')->nullable();
            $table->string('img4_s1')->nullable();
            $table->string('alt4')->nullable();

            $table->string('img5_s1')->nullable();
            $table->string('alt5')->nullable();
            $table->string('btn')->nullable();
            $table->string('btn2')->nullable();

            $table->string('title_s2')->nullable();
            $table->text('text_s2')->nullable();
        
            $table->string('icon1')->nullable();
            $table->string('icon2')->nullable();
            $table->string('icon3')->nullable();
            $table->string('icon4')->nullable();
            $table->string('icon5')->nullable();
            $table->string('icon6')->nullable();
            $table->string('alt1_s3')->nullable();
            $table->string('alt2_s3')->nullable();
            $table->string('alt3_s3')->nullable();
            $table->string('alt4_s3')->nullable();
            $table->string('alt5_s3')->nullable();
            $table->string('alt6_s3')->nullable();
            $table->text('p1')->nullable();
            $table->text('p2')->nullable();
            $table->text('p3')->nullable();
            $table->text('p4')->nullable();
            $table->text('p5')->nullable();
            $table->text('p6')->nullable();
            $table->string('t1_s3')->nullable();
            $table->string('t2_s3')->nullable();
            $table->string('t3_s3')->nullable();
            $table->string('t4_s3')->nullable();
            $table->string('t5_s3')->nullable();
            $table->string('t6_s3')->nullable();

            $table->string('title_s3')->nullable();

            $table->text('text_s3')->nullable();
            $table->string('image_s3')->nullable();

            $table->string('title_s5')->nullable();
            $table->text('text_s5')->nullable();
            $table->string('img_s5')->nullable();
            $table->string('alt_s5')->nullable();
            $table->string('img2_s5')->nullable();
            $table->string('alt2_s5')->nullable();
            $table->string('img3_s5')->nullable();
            $table->string('alt3_s5')->nullable();
            $table->string('img4_s5')->nullable();
            $table->string('alt4_s5')->nullable();
            $table->string('img5_s5')->nullable();
            $table->string('alt5_s5')->nullable();
            $table->string('img6_s5')->nullable();
            $table->string('alt6_s5')->nullable();
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
        Schema::dropIfExists('about_pages');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_header')->nullable();
            $table->string('subtitle_header')->nullable();
            $table->string('image_header')->nullable();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->string('title_s1')->nullable();
            $table->text('text_s1')->nullable();

            $table->string('bg')->nullable();
            $table->string('title_s2')->nullable();
            $table->text('text_s2')->nullable();
            $table->string('title_s3')->nullable();

            $table->string('small_title1_s3')->nullable();
            $table->string('small_subtitle1_s3')->nullable();
            $table->string('image1')->nullable();
            $table->string('alt1')->nullable();
            $table->text('p1_s3')->nullable();
            $table->string('link1_s3')->nullable();

            $table->string('small_title2_s3')->nullable();
            $table->string('small_subtitle2_s3')->nullable();
            $table->string('image2')->nullable();
            $table->string('alt2')->nullable();
            $table->string('link2_s3')->nullable();
            $table->text('p2_s3')->nullable();

            $table->string('small_title3_s3')->nullable();
            $table->string('small_subtitle3_s3')->nullable();
            $table->string('image3')->nullable();
            $table->string('alt3')->nullable();
            $table->string('link3_s3')->nullable();
            $table->text('p3_s3')->nullable();
            
           
            $table->string('title_s4')->nullable();
            $table->string('small_title4_s4')->nullable();
            $table->string('small_subtitle4_s4')->nullable();
            $table->string('link4_s4')->nullable();
            $table->text('p4_s4')->nullable();
            $table->string('image4')->nullable();
            $table->string('alt4')->nullable();

            $table->string('small_title5_s4')->nullable();
            $table->string('small_subtitle5_s4')->nullable();
            $table->string('link5_s4')->nullable();
            $table->text('p5_s4')->nullable();
            $table->string('image5')->nullable();
            $table->string('alt5')->nullable();



            $table->string('small_title6_s4')->nullable();
            $table->string('small_subtitle6_s4')->nullable();
            $table->string('link6_s4')->nullable();
            $table->text('p6_s4')->nullable();
            $table->string('image6')->nullable();
            $table->string('alt6')->nullable();
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
        Schema::dropIfExists('partners');
    }
}

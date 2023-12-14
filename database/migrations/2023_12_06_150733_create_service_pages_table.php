<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_header')->nullable();
            $table->string('subtitle_header')->nullable();
            $table->string('image_header')->nullable();
            $table->string('title_section1')->nullable();
            $table->text('text_section1')->nullable();
            $table->string('image1')->nullable();
            $table->string('alt1')->nullable();
            $table->string('video')->nullable();
            $table->string('bg')->nullable();
           
            $table->string('title_section2')->nullable();
            $table->text('text_section2')->nullable();
            $table->string('title_section3')->nullable();
            $table->string('link')->nullable();
            $table->string('link_url')->nullable();
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
        Schema::dropIfExists('service_pages');
    }
}

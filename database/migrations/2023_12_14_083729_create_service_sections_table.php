<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image1')->nullable();
            $table->string('alt1')->nullable();
            $table->string('title1')->nullable();
            $table->text('p1')->nullable();
            $table->text('text1')->nullable();

            $table->string('image2')->nullable();
            $table->string('alt2')->nullable();
            $table->string('title2')->nullable();
            $table->text('p2')->nullable();
            $table->text('text2')->nullable();

            $table->string('image3')->nullable();
            $table->string('alt3')->nullable();
            $table->string('title3')->nullable();
            $table->text('p3')->nullable();
            $table->text('text3')->nullable();

            $table->string('image4')->nullable();
            $table->string('alt4')->nullable();
            $table->string('title4')->nullable();
            $table->text('p4')->nullable();
            $table->text('text4')->nullable();

            $table->string('image5')->nullable();
            $table->string('alt5')->nullable();
            $table->string('title5')->nullable();
            $table->text('p5')->nullable();
            $table->text('text5')->nullable();
           
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
        Schema::dropIfExists('service_sections');
    }
}

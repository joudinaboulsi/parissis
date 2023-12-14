<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_header')->nullable();
            $table->string('subtitle_header')->nullable();
            $table->string('image_header')->nullable();

            $table->string('title_section1')->nullable();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('specialty')->nullable();
            $table->string('profile')->nullable();
            $table->string('alt')->nullable();

            $table->string('name2')->nullable();
            $table->string('position2')->nullable();
            $table->string('specialty2')->nullable();
            $table->string('profile2')->nullable();
            $table->string('alt2')->nullable();

            $table->string('name3')->nullable();
            $table->string('position3')->nullable();
            $table->string('specialty3')->nullable();
            $table->string('profile3')->nullable();
            $table->string('alt3')->nullable();

            $table->string('name4')->nullable();
            $table->string('position4')->nullable();
            $table->string('specialty4')->nullable();
            $table->string('profile4')->nullable();
            $table->string('alt4')->nullable();
            $table->string('title_section3')->nullable();

            $table->string('organigram')->nullable();


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
        Schema::dropIfExists('teams');
    }
}

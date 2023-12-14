<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_values', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_section2')->nullable();
            $table->string('img_v')->nullable();
            $table->string('alt_v')->nullable();
            $table->string('value')->nullable();
            $table->string('img_v2')->nullable();
            $table->string('alt_v2')->nullable();
            $table->string('value2')->nullable();

            $table->string('img_v3')->nullable();
            $table->string('alt_v3')->nullable();
            $table->string('value3')->nullable();

            $table->string('img_v4')->nullable();
            $table->string('alt_v4')->nullable();
            $table->string('value4')->nullable();

            $table->string('img_v5')->nullable();
            $table->string('alt_v5')->nullable();
            $table->string('value5')->nullable();

            $table->string('bg')->nullable();
            $table->string('data_img')->nullable();
            $table->string('data_alt')->nullable();
            $table->string('data_to')->nullable();
            $table->string('data')->nullable();

            $table->string('data_img2')->nullable();
            $table->string('data_alt2')->nullable();
            $table->string('data_to2')->nullable();
            $table->string('data2')->nullable();

            $table->string('data_img3')->nullable();
            $table->string('data_alt3')->nullable();
            $table->string('data_to3')->nullable();
            $table->string('data3')->nullable();

            $table->string('data_img4')->nullable();
            $table->string('data_alt4')->nullable();
            $table->string('data_to4')->nullable();
            $table->string('data4')->nullable();

            $table->string('data_img5')->nullable();
            $table->string('data_alt5')->nullable();
            $table->string('data_to5')->nullable();
            $table->string('data5')->nullable();

            $table->string('data_img6')->nullable();
            $table->string('data_alt6')->nullable();
            $table->string('data_to6')->nullable();
            $table->string('data6')->nullable();

            $table->string('data_img7')->nullable();
            $table->string('data_alt7')->nullable();
            $table->string('data_to7')->nullable();
            $table->string('data7')->nullable();
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
        Schema::dropIfExists('our_values');
    }
}

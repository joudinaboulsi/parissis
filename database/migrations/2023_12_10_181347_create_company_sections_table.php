<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanySectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_sections', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('img1')->nullable();
            $table->string('alt1')->nullable();
            $table->string('sub1')->nullable();
            $table->text('p1')->nullable();
            $table->string('img2')->nullable();
            $table->string('alt2')->nullable();
            $table->text('p2')->nullable();
            $table->string('sub2')->nullable();

            $table->string('img3')->nullable();
            $table->string('alt3')->nullable();
            $table->string('sub3')->nullable();

            $table->text('p3')->nullable();
            $table->string('title_tab1')->nullable();
            $table->string('title_tab2')->nullable();
            $table->string('title_tab3')->nullable();
            $table->string('title_tab4')->nullable();
            $table->string('title_tab5')->nullable();
            $table->string('subtitle_tab1')->nullable();
            $table->text('text_tab1')->nullable();
            $table->string('image_tab1')->nullable();
            $table->string('alt1_tab1')->nullable();
         
            $table->string('subtitle_tab2')->nullable();
            $table->text('text_tab2')->nullable();
            $table->string('image_tab2')->nullable();
            $table->string('alt1_tab2')->nullable();

            $table->string('subtitle_tab3')->nullable();
            $table->text('text_tab3')->nullable();
            $table->string('image_tab3')->nullable();
            $table->string('alt1_tab3')->nullable();

            $table->string('subtitle_tab4')->nullable();
            $table->text('text_tab4')->nullable();
            $table->string('image_tab4')->nullable();
            $table->string('alt1_tab4')->nullable();

            $table->string('subtitle_tab5')->nullable();
            $table->text('text_tab5')->nullable();
            $table->string('image_tab5')->nullable();
            $table->string('alt1_tab5')->nullable();
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
        Schema::dropIfExists('company_sections');
    }
}

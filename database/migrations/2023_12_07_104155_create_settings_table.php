<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable();
            $table->string('logo_dark')->nullable();
            $table->string('alt')->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('location2')->nullable();
            $table->string('address2')->nullable();
            $table->string('location3')->nullable();
            $table->string('address3')->nullable();
        
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            
            $table->string('phone2')->nullable();
            $table->string('email2')->nullable();

            $table->string('phone3')->nullable();
            $table->string('fax3')->nullable();
            $table->string('email3')->nullable();

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pdf')->nullable();

            $table->string('location4')->nullable();
            $table->string('phone4')->nullable();
            $table->string('address4')->nullable();

            $table->string('email4')->nullable();

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
        Schema::dropIfExists('settings');
    }
}

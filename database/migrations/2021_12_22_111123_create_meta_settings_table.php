<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetaSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_settings', function (Blueprint $table) {
            $table->id();
            $table->string('client')->nullable();
            $table->string('form')->nullable();
            $table->string('logo')->nullable();
            $table->string('title')->nullable();
            $table->string('favicon')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('website_name')->nullable();
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
        Schema::dropIfExists('meta_settings');
    }
}

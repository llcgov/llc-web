<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('application_id');
            $table->foreign('application_id')->references('id')->on('application_sections');
            $table->unsignedBigInteger('info_id');
            $table->foreign('info_id')->references('id')->on('business_information');
            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id')->references('id')->on('business_activity');
            $table->string('city');
            $table->string('tax_year');
            $table->string('business_name');
            $table->string('trade_name');
            $table->string('tin');
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
        Schema::dropIfExists('business');
    }
}

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
            $table->foreign('application_id')->references('id')->on('applicant_section');
            $table->foreign('info_id')->references('id')->on('business_info');
            $table->foreign('activity_id')->references('id')->on('business_activity');
            $table->foreign('tax_payer_id')->references('id')->on('taxpayer_info');
            $table->string('city');
            $table->string('tax_year');
            $table->string('tin');
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

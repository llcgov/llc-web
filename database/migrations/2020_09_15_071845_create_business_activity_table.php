<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_activity', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('line_of_business');
            $table->string('no_of_units');
            $table->string('capitalization')->nullable();
            $table->string('essential')->nullable();
            $table->string('non_essential')->nullable();

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
        Schema::dropIfExists('business_activity');
    }
}

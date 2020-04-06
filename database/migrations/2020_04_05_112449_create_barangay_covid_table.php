<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangayCovidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangay_covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barangay');
            $table->integer('confirmed_case')->nullable();
            $table->integer('pum')->nullable();
            $table->integer('pui')->nullable();
            $table->integer('recovered')->nullable();
            $table->integer('deaths')->nullable();
            $table->integer('pui_tested')->nullable();
            $table->date('date_posted');
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
        Schema::dropIfExists('barangay_covids');
    }
}

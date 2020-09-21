<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('mode_of_payment', ['Annually', 'Semi-Annually', 'Quarterly']);
            $table->enum('type_of_business', ['Single', 'Partnership', 'Corporation', 'Cooperative']);
            $table->enum('ammendment_from', ['Single', 'Partnership', 'Corporation']);
            $table->enum('ammendment_to', ['Single', 'Partnership', 'Corporation']);
            $table->string('tax_payer_lname');
            $table->string('tax_payer_fname');
            $table->string('tax_payer_mname');
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
        Schema::dropIfExists('applicant_section');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_address');
            $table->string('business_postal_code');
            $table->string('business_mobile_no');
            $table->string('business_telephone_no');
            $table->string('business_email_address');

            $table->string('owners_address');
            $table->string('owners_postal_code');
            $table->string('owners_mobile_no');
            $table->string('owners_telephone_no');
            $table->string('owners_email_address');

            $table->string('emergency_full_name')->nullable();
            $table->string('emergency_contact_no')->nullable();
            $table->string('emergency_email_address')->nullable();
            
            $table->string('area');
            $table->string('employees_no_in_est')->nullable();
            $table->string('employees_residing_lgu')->nullable();

            $table->string('lessors_fullname');
            $table->string('lessors_address');
            $table->string('lessors_contact_no');
            $table->string('lessors_email');
            $table->string('monthly_rental');
            
            
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
        Schema::dropIfExists('business_information');
    }
}

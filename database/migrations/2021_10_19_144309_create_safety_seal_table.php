<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSafetySealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('safety_seals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('estName')->nullable();
            $table->string('estAddress')->nullable();
            $table->string('email')->nullable();
            $table->string('contactNo')->nullable();
            $table->string('serial_number')->nullable();
            $table->date('issued_on')->nullable();
            $table->date('validity')->nullable();
            $table->enum('status', ['Pending', 'Removed', 'Approved', 'Declined'])->default('Pending');
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
        Schema::dropIfExists('safety_seals');
    }
}

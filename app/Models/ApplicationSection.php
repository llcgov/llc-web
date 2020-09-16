<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationSection extends Model
{
    protected $fillable=['mode_of_payment', 'type_of_business', 'ammendment_from', 'ammendment_to', 'tax_payer_lname', 'tax_payer_fname', 'tax_payer_mname'];
    // $table->enum('mode_of_payment', ['Annually', 'Semi-Annually', 'Quarterly']);
    // $table->enum('type_of_business', ['Single', 'Partnership', 'Corporation', 'Cooperative']);
    // $table->enum('ammendment_from', ['Single', 'Partnership', 'Corporation']);
    // $table->enum('ammendment_to', ['Single', 'Partnership', 'Corporation']);
    // $table->string('tax_payer_lname');
    // $table->string('tax_payer_fname');
    // $table->string('tax_payer_mname');
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxPayerInfo extends Model
{
    protected $fillable=['lname', 'fname', 'mname'];
    // $table->string('l_name');
    // $table->string('f_name');
    // $table->string('m_name');
}

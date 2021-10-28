<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SafetySeal extends Model
{
    protected $fillable = ['name', 'email',  'estName', 'estAddress','contactNo', 'serial_number', 'issued_on', 'inspector', 'validty', 'status'];
}
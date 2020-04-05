<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CovidCase extends Model
{
    protected $fillable = ['confirmed', 'pui', 'pum', 'recovered'];

}

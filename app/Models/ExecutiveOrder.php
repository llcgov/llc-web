<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExecutiveOrder extends Model
{
    protected $fillable = ['title', 'year', 'name', 'path'];
}

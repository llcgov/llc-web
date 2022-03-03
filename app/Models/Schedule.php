<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable =['title', 'start', 'end', 'url', 'group_id'];
}

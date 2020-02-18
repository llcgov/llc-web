<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Image extends Model
{
    protected $fillable = ['name', 'type', 'size', 'path'];
}

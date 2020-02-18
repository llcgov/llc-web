<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Media;

class News extends Model
{
    public function media(){
        return $this->morphToMany(Media::class, 'mediable');
    }
}

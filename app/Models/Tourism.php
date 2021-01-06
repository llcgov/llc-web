<?php

namespace App\Models;

use App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class Tourism extends Model
{
    public function media(){
        return $this->morphToMany(Media::class, 'mediable');
    }
}

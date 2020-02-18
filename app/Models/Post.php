<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Media;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'post_type'];
    
    public function media(){
        return $this->morphToMany(Media::class, 'mediable');
    }
}

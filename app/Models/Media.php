<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\News;
class Media extends Model
{
    protected $fillable = ['name', 'type', 'size', 'path'];
    public function posts()
    {
        return $this->morphedByMany(Post::class(), 'mediable');
    }

    public function news()
    {
        return $this->morphedByMany(News::class(), 'mediable');
    }
}
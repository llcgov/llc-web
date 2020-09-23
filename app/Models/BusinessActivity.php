<?php

namespace App\Models;

use App\Models\Business;

use Illuminate\Database\Eloquent\Model;

class BusinessActivity extends Model
{
    protected $fillable = ['business_id', 'line_of_business', 'no_of_units', 'capitalization', 'essential', 'non_essential', 'business_id'];
    
    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }
}

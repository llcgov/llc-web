<?php

namespace App\Models;

use App\Models\Business;

use Illuminate\Database\Eloquent\Model;

class BusinessActivity extends Model
{
    protected $fillable = ['line_of_business', 'no_of_units', 'capitalization', 'essential', 'non_essential', 'business_id'];
    
    public function business()
    {
        return $this->hasOne(Business::class());
    }
}

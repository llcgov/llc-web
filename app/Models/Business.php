<?php

namespace App\Models;

use App\Models\ApplicationSection;
use App\Models\BusinessInformation;
use App\Models\BusinessActivity;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['city', 'tax_year', 'tin', 'business_name', 'trade_name'];
    
    public function app_section()
    {
        return $this->hasOne('App\Models\ApplicationSection');
    }

    public function business_information()
    {
        return $this->hasOne('App\Models\BusinessInformation');
    }
    
    public function business_activity()
    {
        return $this->hasOne('App\Models\BusinessActivity');
    }
}

<?php

namespace App\Models;
use App\Models\ApplicationSection;
use App\Models\BusinessInformation;
use App\Models\TaxPayerInfo;
use App\Models\BusinessActivity;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['application_id', 'info_id', 'activity_id', 'city', 'tax_year', 'tin', 'business_name', 'trade_name'];
    
    public function app_section()
    {
        return $this->hasOne(ApplicationSection::class());
    }

    public function business_information()
    {
        return $this->hasOne(BusinessInformation::class());
    }
    
    public function business_activity()
    {
        return $this->hasMany(BusinessInformation::class());
    }
}

<?php

namespace App\Models;
use App\Models\ApplicationSection;
use App\Models\BusinessInformation;
use App\Models\TaxPayerInfo;
use App\Models\BusinessActivity;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['application_id', 'info_id', 'activity_id', 'city', 'tax_yeaer', 'tin', 'business_name', 'trade_name'];
    
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
        return $this->hasOne(BusinessInformation::class());
    }
}


// $table->foreign('application_id')->references('id')->on('applicant_section');
// $table->foreign('info_id')->references('id')->on('business_info');
// $table->foreign('activity_id')->references('id')->on('business_activity');
// $table->foreign('tax_payer_id')->references('id')->on('taxpayer_info');
// $table->string('city');
// $table->string('tax_year');
// $table->string('tin');
// $table->string('business_name');
// $table->string('trade_name');
// $table->string('tin');
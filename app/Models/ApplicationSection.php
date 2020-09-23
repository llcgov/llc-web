<?php

namespace App\Models;
use App\Models\Business;
use Illuminate\Database\Eloquent\Model;

class ApplicationSection extends Model
{
    protected $fillable=['business_id', 'mode_of_payment', 'type_of_business', 'ammendment_from', 'ammendment_to', 'tax_payer_lname', 'tax_payer_fname', 'tax_payer_mname'];

    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }

}

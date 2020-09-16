<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessInformation extends Model
{
    protected $fillable=['business_address', 'business_postal_code', 'business_mobile_no', 'business_telephone_no', 'business_email_address', 'owners_address', 'owners_postal_code','owners_mobile_no', 'owners_telephone_no', 'owners_email_address', 'emergency_full_name', 'emergency_contact_no', 'emergency_email_address,', 'area', 'employees_no_in_est', 'employees_residing_lgu', 'lessors_fullname', 'lessors_address', 'lessors_contact_no', 'lessors_email', 'monthly_rental'];
}

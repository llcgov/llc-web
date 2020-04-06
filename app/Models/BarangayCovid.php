<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangayCovid extends Model
{
    //

    protected $fillable = ['barangay', 'confirmed_case', 'pum', 'pui', 'recovered', 'deaths', 'pui_tested', 'date_posted'];
    
}

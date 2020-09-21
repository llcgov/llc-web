<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicationSection;
use App\Models\BusinessInformation;
use App\Models\BusinessActivity;
use App\Models\Business;

class BusinessPermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.business');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $app = ApplicationSection::create([
            'mode_of_payment'=>$request->input('mode_of_payment'),
            'type_of_business'=>$request->input('type_of_business'),
            'ammendment_from'=>$request->input('ammendment_from'),
            'ammendment_to'=>$request->input('ammendment_to'),
            'tax_payer_lname'=>$request->input('tax_payer_lname'),
            'tax_payer_fname'=>$request->input('tax_payer_fname'),
            'tax_payer_mname'=>$request->input('tax_payer_mname')
        ]);

        $info = BusinessInformation::create([
            'business_address'=>$request->input('business_address'),
            'business_postal_code'=>$request->input('business_postal_code'),
            'business_mobile_no'=>$request->input('business_mobile_no'),
            'business_telephone_no'=>$request->input('business_telephone'),
            'business_email_address'=>$request->input('business_email_address'),

            'owners_address'=>$request->input('owners_address'),
            'owners_postal_code'=>$request->input('owners_postal_code'),
            'owners_mobile_no'=>$request->input('owners_mobile_no'),
            'owners_telephone_no'=>$request->input('owners_telephone'),
            'owners_email_address'=>$request->input('owners_email_address'),

            'emergency_full_name'=>$request->input('emerg_full_name'),
            'emergency_contact_no'=>$request->input('emerg_mobile_no'),
            // 'emergency_email_addres'=>$request->input('emerg_email'),
            'emergency_email_addres'=> "Testing",
            
            'area'=>$request->input('business_area'),
            'employees_no_in_est'=>$request->input('no_of_employees'),
            'employees_residing_lgu'=>$request->input('no_of_emp_residing_lgu'),
            
            'lessors_fullname'=>$request->input('lessors_fullname'),
            'lessors_address'=>$request->input('lessors_address'),
            'lessors_contact_no'=>$request->input('lessors_contact'),
            'lessors_email'=>$request->input('lessors_email'),
            'monthly_rental'=>$request->input('monthly_rental')      

        ]);

        // $act = BusinessActivity::create([
        //     'line_of_business'=>$request->input('line_of_business'),
        //     'no_of_units'=>$request->input('no_of_units'),
        //     'capitalization'=>$request->input('capitalization'),
        //     'essential'=>$request->input('essential'),
        //     'non_essential'=>$request->input('non_essential'),
            
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

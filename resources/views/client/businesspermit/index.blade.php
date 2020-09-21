@extends('client.layout.master')

@section('content')
    
    <div class="container">
        <div class="my-2">
            <form action="{{ route('client.business.store')}}" >
                @method('POST')
                @csrf
                <div class="row">
                    <div class="col-md-9 offset-md-3 my-8">
                        <h2 class="font-semibold">APPLICATION FORM FOR BUSINESS PERMIT</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-2">
                        <div class="form-group">
                            <label for="taxyear"><h5>TAX YEAR</h5></label>
                            <select name="tax_year" id="taxyear" class="form-control">
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="form-group">
                            <label for="city"><h5>City/Municipality</h5></label>
                            <input class="form-control" type="text" name="city" id="city" placeholder="e.g. Lapu-Lapu City">
                        </div>
                    </div>            
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="font-medium">I. APPLICANT SECTION</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h5 class="">Basic Information</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Mode of payment</h5>
                    </div>
                    <div class="col-md-2">
                        <h5>Type of Business</h5>
                    </div>
                    <div class="col-md-2">
                        <h5>Amendment from</h5>
                    </div>
                    <div class="col-md-2">
                        <h5>Amendment to</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" name="application_type" id="">
                                <option value="new">New</option>
                                <option value="new">Renew</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" name="mode_of_payment" id="">
                                <option value="annually">Annually</option>
                                <option value="semi_annually">Semi-Annually</option>
                                <option value="quarterly">Quarterly</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name="type_of_business" id="">
                                <option value="single">Single</option>
                                <option value="partnership">Partnership</option>
                                <option value="corporation">Corporation</option>
                                <option value="cooperative">Cooperative</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name="ammendment_from" id="">
                                <option value="single">Single</option>
                                <option value="partnership">Partnership</option>
                                <option value="corporation">Corporation</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name="ammendment_to" id="">
                                <option value="single">Single</option>
                                <option value="partnership">Partnership</option>
                                <option value="corporation">Corporation</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for="dateofapplication"><h5>Date of Application</h5></label>
                            <input type="date" class="form-control" name="date_of_application" id="dateofapplication">
                        </div>
                        <div class="form-group">
                            <label class="form-check-label" for="tin"><h5>TIN</h5></label>
                            <input type="text" class="form-control" name="tin" id="tin">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for=""><h5>DTI/SEC/CDA Registration No.</h5></label>
                            <input class="form-control" type="text" name="date_of_app_reg_no" id="dti">
                        </div>
                        <div class="form-group">
                            <label class="form-check-label" for=""><h5>DTI/SEC/CDA Registration No.</h5></label>
                            <input class="form-control" type="text" name="tin_reg_no" id="dti">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <h5>Are you enjoying tax incentive from any Government Entity?</h5>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                            <label class="form-check-label" for="exampleRadios1"><h5>Yes</h5></label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                            <label class="form-check-label" for="exampleRadios1"><h5>No</h5></label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input class="form-control" type="text" name="incent" id="text" placeholder="if no Please Specify">
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-4 offset-md-4">
                        <h4>Name of Taxpayer/Registrant</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-check-label" for="lastname"><h5>Last Name</h5></label>
                            <input type="text" class="form-control" name="tax_payer_lname" id="lastname">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-check-label" for="firstname"><h5>First Name</h5></label>
                            <input type="text" class="form-control" name="tax_payer_fname" id="firstname">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-check-label" for="middlename"><h5>Middle Name</h5></label>
                            <input type="text" class="form-control" name="tax_payer_mname" id="middlename">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-check-label" for="businessname"><h5>Business Name</h5></label>
                            <input type="text" class="form-control" name="business_name" id="businessname">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-check-label" for="trd"><h5>Trade Name/Franchise Name</h5></label>
                            <input type="text" class="form-control" name="trd_name" id="trd">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="font-medium">II. Other Information</h2>
                    </div>
                    <div class="col-md-9 mt-2">
                        <h5>Note: For Renewal Applications, do not fill up this section unless certain information have changed.</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-check-label" for="businessaddress"><h5>Business Address</h5></label>
                            <input type="text" class="form-control" name="business_address" id="businessaddress">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for="postalcode"><h5>Postal Code</h5></label>
                            <input type="text" class="form-control" name="business_postal_code" id="postalcode">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>Email Address</h5></label>
                            <input type="text" class="form-control" name="business_email_address" id="emailaddress">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for="postalcode"><h5>Telephone No.</h5></label>
                            <input type="text" class="form-control" name="business_telephone" id="postalcode">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for="mobile_no"><h5>Mobile No.</h5></label>
                            <input type="text" class="form-control" name="business_mobile_no" id="mobileno">
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-check-label" for="ownersaddress"><h5>Owners Address</h5></label>
                            <input type="text" class="form-control" name="owners_address" id="ownersaddress">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for="postalcode"><h5>Postal Code</h5></label>
                            <input type="text" class="form-control" name="owners_postal_code" id="owners_postal_code">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>Email Address</h5></label>
                            <input type="text" class="form-control" name="owners_email_address" id="owners_email_address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for="postalcode"><h5>Telephone No.</h5></label>
                            <input type="text" class="form-control" name="owners_telephone" id="owners_telephone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for="mobile_no"><h5>Mobile No.</h5></label>
                            <input type="text" class="form-control" name="owners_mobile_no" id="owners_mobile_no">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 mt-2">
                        <h5>In case of emergency, provide name of contact person: </h5>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input type="text" class="form-control" name="emerg_full_name" id="emerg_full_name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for="mobile_no"><h5>Telephone/Mobile No.</h5></label>
                            <input type="text" class="form-control" name="emerg_mobile_no" id="emerg_mobile_no">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>Email Address</h5></label>
                            <input type="text" class="form-control" name="emerg_email" id="emerg_email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>Business Area(in sq. m.):</h5></label>
                            <input type="text" class="form-control" name="business_area" id="business_area">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>Total No. of Empleyees in the Establishment:</h5></label>
                            <input type="text" class="form-control" name="no_of_employees" id="no_of_employees">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>No. of Employees Residing within LGU: </h5></label>
                            <input type="text" class="form-control" name="no_of_emp_residing_lgu" id="no_of_emp_residing_lgu">
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>No. of Employees Residing within LGU: </h5></label>
                            <input type="text" class="form-control" name="mobile_no" id="mobileno">
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>Lessor's Full Name: </h5></label>
                            <input type="text" class="form-control" name="lessors_full_name" id="mobileno">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>Lessor's Full Address: </h5></label>
                            <input type="text" class="form-control" name="lessors_address" id="mobileno">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>Lessor's Telephone/Mobile No.: </h5></label>
                            <input type="text" class="form-control" name="lessors_contact" id="mobileno">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>Lessor's Email Address: </h5></label>
                            <input type="text" class="form-control" name="lessors_email" id="mobileno">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-check-label" for="emailaddress"><h5>Monthly Rental: </h5></label>
                            <input type="text" class="form-control" name="monthly_rental" id="mobileno">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"><h5>Line of Business</h5><br></div>
                    <div class="col-md-2"><h5>No. of Units</h5><br></div>
                    <div class="col-md-2"><h5>Capitalization</h5><small>(for New Business)</small></div>
                    <div class="col-md-4 text-center">
                        <h5>Gross/Sales Receitpts <small>(for Renew)</small></h5>
                        <div class="row">
                            <div class="col-md-5 text-left">Essential</div>
                            <div class="col-md-7 text-left">None-Essential</div>                    
                        </div>
                    </div>
                </div>

                <div class="businessact">
                    <div class="row row2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" placeholder="" type="text" name="line_of_business[]" id="">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input class="form-control" placeholder="" type="text" name="no_of_units[]" id="">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input class="form-control" placeholder="" type="text" name="capital[]" id="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="text" name="essential[]" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="text" name="non_essential[]" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary addline" id="btnline0"><span><i class="fas fa-plus" id="line0"></i></span></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-10 col-md-2">
                        <button type="submit" class="btn btn-primary" value="Submit">SUBMIT</button>
                        <button class="btn btn-primary">CLEAR</button>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
@endsection
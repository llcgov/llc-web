@extends('client.layout.master')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-9 offset-md-3">
                <h2>APPLICATION FORM FOR BUSINESS PERMIT</h2>
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
                <h2 class="font-semibold">I. APPLICANT SECTION</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h4 class="">Basic Information</h4>
            </div>
            <div class="col-md-3">
                <h4>Mode of payment</h4>
            </div>
            <div class="col-md-2">
                <h4>Type of Business</h4>
            </div>
            <div class="col-md-2">
                <h4>Amendment from</h4>
            </div>
            <div class="col-md-2">
                <h4>Amendment to</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="new">
                    <label class="form-check-label" for="exampleRadios1"><h5>New</h5></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Renew</h5></label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Annually</h5></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Semi-Annually</h5></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Quarterly</h5></label>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Single</h5></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Partnership</h5></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Corporation</h5></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Cooperative</h5></label>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Single</h5></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Partnership</h5></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Corporation</h5></label>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Single</h5></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Partnership</h5></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="renew">
                    <label class="form-check-label" for="exampleRadios1"><h5>Corporation</h5></label>
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
                    <input class="form-control" type="text" name="dti" id="dti">
                </div>
                <div class="form-group">
                    <label class="form-check-label" for=""><h5>DTI/SEC/CDA Registration No.</h5></label>
                    <input class="form-control" type="text" name="dti" id="dti">
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
                    <input class="form-control" type="text" name="text" id="text" placeholder="if no Please Specify">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h4>Name of Taxpayer/Registrant</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-check-label" for="lastname"><h5>Last Name</h5></label>
                    <input type="text" class="form-control" name="last_name" id="lastname">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-check-label" for="firstname"><h5>First Name</h5></label>
                    <input type="text" class="form-control" name="first_name" id="firstname">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-check-label" for="middlename"><h5>Middle Name</h5></label>
                    <input type="text" class="form-control" name="middle_name" id="middlename">
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
                    <input type="text" class="form-control" name="trd" id="trd">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h2 class="font-semibold">II. Other Information</h2>
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
                    <input type="text" class="form-control" name="postal_code" id="postalcode">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>Email Address</h5></label>
                    <input type="text" class="form-control" name="email_address" id="emailaddress">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-check-label" for="postalcode"><h5>Telephone No.</h5></label>
                    <input type="text" class="form-control" name="postal_code" id="postalcode">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-check-label" for="mobile_no"><h5>Mobile No.</h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
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
                    <input type="text" class="form-control" name="postal_code" id="postalcode">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>Email Address</h5></label>
                    <input type="text" class="form-control" name="email_address" id="emailaddress">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-check-label" for="postalcode"><h5>Telephone No.</h5></label>
                    <input type="text" class="form-control" name="postal_code" id="postalcode">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-check-label" for="mobile_no"><h5>Mobile No.</h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mt-2">
                <h5>In case of emergency, provide name of contact person: </h5>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-check-label" for="mobile_no"><h5>Telephone/Mobile No.</h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>Email Address</h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>Business Area(in sq. m.):</h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>Total No. of Empleyees in the Establishment:</h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>No. of Employees Residing within LGU: </h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>No. of Employees Residing within LGU: </h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>Lessor's Full Name: </h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>Lessor's Full Address: </h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>Lessor's Telephone/Mobile No.: </h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>Lessor's Email Address: </h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-check-label" for="emailaddress"><h5>Monthly Rental: </h5></label>
                    <input type="text" class="form-control" name="mobile_no" id="mobileno">
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
                    <button class="btn btn-primary addline" id="btnline0"><span><i class="fas fa-plus" id="line0"></i></span></button>
                </div>
            </div>
        </div>

    </div>
@endsection
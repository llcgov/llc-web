@extends('client.layout.master')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="form-inline">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6 d-flex justify-content-end">
                                <label for="taxyear">Tax Year</label>
                            </div>
                            <div class="col-md-6 my-0 d-flex justify-content-start">
                                <input class="form-control my-2" type="text" name="tax_year" id="taxyear">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-inline">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6 my-0 d-flex justify-content-end">
                                <label for="city">City/Municipality</label>
                            </div>
                            <div class="col-md-6 d-flex justify-content-start">
                                <input class="form-control my-2" type="text" name="city" id="city">
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>




@endsection
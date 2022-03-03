@extends('client.layout.master')

@section('content')
    <div class="container text-center">
        <div class="row m-5 p-5">
            <div class="col-md-12">
                <h4>Downloadables PDF Forms</h4>
            </div>
        </div>
        <div class="row m-5 p-5">
            <div class="col-md-6">
                <a href="{{ URL::to( '/files/FormNo.212PersonalDataSheet.pdf')  }}" target="_blank"><button class="btn btn-primary"><h5>Form No. 212 Personal Data Sheet</h5></button></a>
            </div>           
            <div class="col-md-6">
                <a href="{{ URL::to( '/files/ContactTracer.pdf')  }}" target="_blank"><button class="btn btn-primary"><h5>Contact Tracer Application Form</h5></button></a>
            </div> 
        </div>
    </div>
@endsection
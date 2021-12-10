@extends('clientv2.layout.master')

@section('content')
<main>
    <section>
        <div class="container pt-5 mt-5">
            <div class="row">
                <!-- <div class="col-lg-6 offset-lg-3"><h3>Safety Seal Logo Safety Seal Logo Safety Seal Logo Safety Seal Logo</h3> -->
                <div class="offset-sm-3 col-sm-5 mr-0 mr-0">
                    <img class="rounded img-fluid" src="{{ asset('img/safetyseallogo.jpg') }}" alt="Safety Seal">
                </div>
            </div>

            <div class="row">
                    <div class="offset-sm-3 col-sm-2 text-center">
                        <img class="rounded img-fluid" src="{{ asset('img/pg.png') }}" alt="Lapu-Lapu City Seal">
                    </div>
                    
                    <div class="col-sm-3">
                        <h4 class="text-center"><strong>{{ $safetySeal['estName'] }}</strong></h4>
                        <h6 class="text-left">Seal Number: <strong>{{ $safetySeal['serial_number'] }}</strong></h6>
                        <h6 class="text-left">Issued On: <strong>{{ $safetySeal['issued_on'] }}</strong></h6>
                        <h6 class="text-left">Valid Until: <strong>{{ $safetySeal['validity'] }}</strong></h6>
                    </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>
</main>
@endsection
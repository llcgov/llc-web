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
                    <div class="col-sm-3">
                        <h4 class="text-center"><strong>{{ $safetySeal['estName'] }}</strong></h4>
                        <h5 class="text-center">Seal Number: <strong>{{ $safetySeal['serial_number'] }}</strong></h5>
                        <h5 class="text-center">Issued On: <strong>{{ $safetySeal['issued_on'] }}</strong></h5>
                        <h5 class="text-center">Valid Until: <strong>{{ $safetySeal['validity'] }}</strong></h5>
                    </div>
                    <div class="offset-sm-3 col-sm-2 text-center">
                        <img class="rounded img-fluid" src="{{ asset('img/llc-seal.png') }}" alt="Lapu-Lapu City Seal">
                    </div>
            </div>
        </div>
    </section>
</main>
@endsection
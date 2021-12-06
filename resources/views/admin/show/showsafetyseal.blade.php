<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('clientv2/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('clientv2/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3 d-flex justify-content-center">
                <img src="{{ asset('img/llc-seal.png') }}" class="rounded mx-auto d-block" id="llclogo" alt="Lapu-Lapu City Logo">
            </div>
            <div class="col-md-6 mt-4">
                <h4 class="text-center"><strong>{{$est->estName}}</strong></h4>
                <h5 class="text-center">Safety Seal Number: {{$est->serial_number}}</h5>
                <h5 class="text-center">Issued On: {{isset($est->issued_on) ? $est->issued_on : "Not yet Scheduled"}}</h5>
                <h5 class="text-center">Valid Until: {{isset($est->validity) ? $est->validity : "Not yet Scheduled"}}</h5>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                {{ QrCode::size(200)->generate(route('client.safetysealverification', ['id' => $est->serial_number])) }}
            </div>
        </div>
    </div>    
    
</body>
</html>


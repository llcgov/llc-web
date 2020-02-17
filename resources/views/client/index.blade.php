@extends('client.layout.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <h5 class="font-weight-bold">EVENTS</h5>
                </div>
                <ul class="list-group list-group-flush scroll">
                    @foreach ($posts as $item)
                        <li class="text-dark list-group-item"> <img src="#" alt="sometxt.png">{{ $item->title}}</li>
                    @endforeach
                    {{-- <li class="list-group-item">Vestibulum at eros</li> --}}
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="font-weight-bold">TOURISM</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="font-weight-bold">BIDS AND AWARDS</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="font-weight-bold">JOBS</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
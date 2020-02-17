@extends('client.layout.master')
@section('content')
<div class="container-fluid">
<div class="row">
 <div class="offset-md-3 col-md-6 offset-md-3 my-2">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            @foreach ($images as $key => $image)
            <li data-target="#demo" data-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : ''}}"></li>
            @endforeach
        </ul>
        <div class="carousel-inner">
            @foreach ($images as $key => $image)
                <div class="carousel-item {{ $key == 0 ? 'active': ''}}">
                    <img src="{{ url( 'storage/' . $image->path . '/' . $image->name) }}" alt="Los Angeles" width="1100" height="500">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
 </div>
</div>

{{-- POSTS AND EVENTS --}}
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
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <h5 class="font-weight-bold">TOURISM</h5>
                </div>
                <ul class="list-group list-group-flush scroll">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <h5 class="font-weight-bold">BIDS AND AWARDS</h5>
                </div>
                <ul class="list-group list-group-flush scroll">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <h5 class="font-weight-bold">JOBS</h5>
                </div>
                <ul class="list-group list-group-flush scroll">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
{{-- END EVENTS AND POSTS --}}

    <div class="row">
        <div class="col-md-8">
            YOUTUBE VIDEO DISPLAY
        </div>
        <div class="col-md-4">
            calendar
        </div>
    </div>
</div>
@endsection
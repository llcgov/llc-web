@extends('client.layout.master')
@section('content')
<div class="container-fluid">
<div class="row">
 <div class="offset-md-2 col-md-8 offset-md-2 my-2">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            @foreach ($images as $key => $image_count)
            <li data-target="#demo" data-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : ''}}"></li>
            @endforeach
        </ul>
        <div class="carousel-inner">
            @foreach ($images as $key_image => $image)
                <div class="carousel-item {{ $key_image == 0 ? 'active': ''}}">
                    <img src="{{ url( 'storage/' . $image->path . '/' . $image->name) }}" alt="Los Angeles" width="1300" height="500">
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
                    @foreach ($posts as $item)
                        <li class="text-dark list-group-item">{{ $item->title}}</li>
                    @endforeach
                    {{-- <li class="list-group-item">Vestibulum at eros</li> --}}
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <h5 class="font-weight-bold">BIDS AND AWARDS</h5>
                </div>
                <ul class="list-group list-group-flush scroll">
                    @foreach ($posts as $item)
                        <li class="text-dark list-group-item"> {{ $item->title}}</li>
                    @endforeach
                    {{-- <li class="list-group-item">Vestibulum at eros</li> --}}
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <h5 class="font-weight-bold">JOBS</h5>
                </div>
                <ul class="list-group list-group-flush scroll">
                    @foreach ($posts as $item)
                        <li class="text-dark list-group-item"> {{ $item->title}}</li>
                    @endforeach
                    {{-- <li class="list-group-item">Vestibulum at eros</li> --}}
                </ul>
            </div>
        </div>
    </div>
{{-- END EVENTS AND POSTS --}}

    <div class="row my-2">
        <div class="col-md-7"> 
            <iframe width="1080" height="720" src="https://www.youtube.com/embed/MC-mszipMKY" frameborder="0" allow="encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-5">
           <div id='calendar'></div>
        </div>
    </div>
</div>
@endsection
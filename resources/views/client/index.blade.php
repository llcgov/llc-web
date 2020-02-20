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
                        <img src="{{ url( 'storage/' . $image->path . '/' . $image->name) }}" class="cover" alt="Los Angeles" width="1300" height="500">
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

    <div class="row">
        <div class="offset-md-2 col-md-8 offset-md-2 my-2">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h5 class="font-weight-bold">EVENTS</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Events')
                                    <li class="text-dark list-group-item"> 
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) }}" alt="" width="80px">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="text-uppercase font-content"><p> {{ $item->title}}</p></span>
                                                {{-- {{ dd($item->created_at) }} --}}
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->created_at))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success">
                        <div class="card-header">
                            <h5 class="font-weight-bold">TOURISM</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Tourism')
                                <li class="text-dark list-group-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) }}" alt="" width="80px">
                                        </div>
                                        <div class="col-md-8">
                                            <span class="text-uppercase font-content"><p> {{ $item->title}}</p></span>
                                            {{-- {{ dd($item->created_at) }} --}}
                                            <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->created_at))}}</span>
                                        </div>
                                    </div>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success">
                        <div class="card-header">
                            <h5 class="font-weight-bold">BIDS AND AWARDS</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Bids')
                                    <li class="text-dark list-group-item"> 
                                        <div class="row">
                                            {{-- <div class="col-md-4">
                                                <img src="{{ url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) }}" alt="" class="img-thumbnail" width="100px">
                                            </div> --}}
                                            <div class="col-md-12">
                                                <span class="text-uppercase font-content"><p>{{ $item->title}}</p></span>
                                                {{-- {{ dd($item->created_at) }} --}}
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->created_at))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success">
                        <div class="card-header">
                            <h5 class="font-weight-bold">JOBS</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Jobs')
                                <li class="text-dark list-group-item"> 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) }}" alt="" width="80px">
                                        </div>
                                        <div class="col-md-8">
                                            <span class="text-uppercase font-content"><p>{{ $item->title}}</p></span>
                                            {{-- {{ dd($item->created_at) }} --}}
                                            <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->created_at))}}</span>
                                        </div>
                                    </div>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-md-6"> 
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h5 class="font-weight-bold">LATEST NEWS</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Latest Posts')
                                    <li class="text-dark list-group-item"> 
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) }}" alt="" width="80px">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="text-uppercase font-content"><p> {{ $item->title}}</p></span>
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->created_at))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h5 class="font-weight-bold">LIBRENG SERBISYO</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Latest Post')
                                    <li class="text-dark list-group-item"> 
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) }}" alt="" width="80px">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="text-uppercase font-content"><p> {{ $item->title}}</p></span>
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->created_at))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h5 class="font-weight-bold">SPORTS</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Latest Post')
                                    <li class="text-dark list-group-item"> 
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) }}" alt="" width="80px">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="text-uppercase font-content"><p> {{ $item->title}}</p></span>
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->created_at))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row my-2">
                <div class="col-md-6"> 
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Flapulapucitygovernment%2Fvideos%2F395809897803594%2F&show_text=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                      </div>
                </div>
                <div class="col-md-6">
                   <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
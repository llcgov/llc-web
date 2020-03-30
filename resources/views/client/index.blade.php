@extends('client.layout.master')
@section('content')
<div class="container-fluid">
    <div class="row bg-secondary slider">
        <div class="offset-md-2 col-md-8 my-2">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    @foreach ($images as $key => $image_count)
                        <li data-target="#demo" data-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : ''}}"></li>
                    @endforeach
                </ul>
                <div class="carousel-inner">
                    @foreach ($images as $key_image => $image)
                        <div class="carousel-item {{ $key_image == 0 ? 'active': ''}}">
                            <img class="img-thumbnail" src="{{ url( 'storage/' . $image->path . '/' . $image->name) }}" class="d-block img-fluid" alt="Los Angeles" width="1300" height="500">
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

    <div class="row posts">
        <div class="offset-md-2 col-md-8">
            <div class="row rounded py-3">
                {{-- <div class="col-md-3">
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h5 class="font-weight-bold font-responsive">EVENTS</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Events')
                                <a href="{{ route('post.show', $item->id) }}" class="text-decoration-none">

                                    <li class="text-dark list-group-item post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-thumbnail" src="{{ !empty($item->media()->first()->path) ? url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) : '' }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="font-content"><p> {{ $item->title}}</p></span>
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->date_posted))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div> --}}
                <div class="col-md-4">
                    <div class="card text-white bg-success">
                        <div class="card-header">
                            <h5 class="font-weight-bold font-responsive">TOURISM</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Tourism')
                                <a href="{{ route('post.show', $item->id) }}" class="text-decoration-none">

                                    <li class="text-dark list-group-item post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-thumbnail" src="{{ !empty($item->media()->first()->path) ? url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) : '' }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="font-content"><p> {{ $item->title}}</p></span>
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->date_posted))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success">
                        <div class="card-header">
                            <h5 class="font-weight-bold font-responsive">BIDS AND AWARDS</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Bids')
                                <a href="{{ route('post.show', $item->id) }}" class="text-decoration-none">

                                    <li class="text-dark list-group-item post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-thumbnail" src="{{ !empty($item->media()->first()->path) ? url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) : '' }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="font-content"><p> {{ $item->title}}</p></span>
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->date_posted))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success">
                        <div class="card-header">
                            <h5 class="font-weight-bold font-responsive">JOBS</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Jobs')
                                <a href="{{ route('post.show', $item->id) }}" class="text-decoration-none">

                                    <li class="text-dark list-group-item post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-thumbnail" src="{{ !empty($item->media()->first()->path) ? url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) : '' }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="font-content"><p> {{ $item->title}}</p></span>
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->date_posted))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row my-2 rounded py-3">
                <div class="col-md-6">
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h5 class="font-weight-bold font-responsive">LATEST NEWS</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'News')
                                <a href="{{ route('post.show', $item->id) }}" class="text-decoration-none">

                                    <li class="text-dark list-group-item post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-thumbnail" src="{{ !empty($item->media()->first()->path) ? url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) : '' }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="font-content"><p> {{ $item->title}}</p></span>
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->date_posted))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"  src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F1597892066938019%2Fvideos%2F251789805842179%2F&show_text=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="offset-md-2 col-md-8">

            <div class="row my-2  bg-white rounded py-3">
                <div class="col-md-3">
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h5 class="font-weight-bold font-responsive">EVENTS</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll-lg">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Events')
                                <a href="{{ route('post.show', $item->id) }}" class="text-decoration-none">

                                    <li class="text-dark list-group-item post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-thumbnail" src="{{ !empty($item->media()->first()->path) ? url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) : '' }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="font-content"><p> {{ $item->title}}</p></span>
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->date_posted))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id='calendar'></div>
                </div>
            </div>
            <div class="row my-2 bg-white rounded">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Flapulapucitygovernment%2Fvideos%2F395809897803594%2F&show_text=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h5 class="font-weight-bold font-responsive">LIBRENG SERBISYO</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Serbisyo')
                                <a href="{{ route('post.show', $item->id) }}" class="text-decoration-none">

                                    <li class="text-dark list-group-item post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-thumbnail" src="{{ !empty($item->media()->first()->path) ? url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) : '' }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="font-content"><p> {{ $item->title}}</p></span>
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->date_posted))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h5 class="font-weight-bold font-responsive">SPORTS</h5>
                        </div>
                        <ul class="list-group list-group-flush scroll">
                            @foreach ($posts as $item)
                                @if ($item->post_type == 'Sports')
                                <a href="{{ route('post.show', $item->id) }}" class="text-decoration-none">

                                    <li class="text-dark list-group-item post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-thumbnail" src="{{ !empty($item->media()->first()->path) ? url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) : '' }}" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <span class="font-content"><p> {{ $item->title}}</p></span>
                                                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($item->date_posted))}}</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="icon-bar">
  <h5>COVID-19 UPDATE</h5>
  <a href="#" class="facebook"><img src="{{asset('img/500.png')}}" width="50px" alt=""> 100</a>
  <a href="#" class="twitter"><i class="fa fa-twitter"></i>200</a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
</div>
@push('js')
    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
              var calendarEl = document.getElementById('calendar');

              var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid' ],
                defaultView: 'dayGridMonth',
                defaultDate: new Date(),
                header: {
                  left: 'prev, next',
                  center: 'title',
                  right: ''
                },
                events:
                    {!! $schedules->toJson() !!}
              });

              calendar.render();
            });

    </script>
@endpush
@endsection

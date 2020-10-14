@extends('client.layout.master')
@section('content')
    @push('css')
        <style>
            video {
                object-fit: cover;
                z-index: -1;
                position: relative;
                max-width: 100%;
                top: -100px;
                align-content: center;
            }   
            .countdown{
                margin-top: -30vh;
            }

            .countdown span {
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
                font-size: 3rem;
                margin-left: 0.8rem;
            }

            .countdown-circles {
                text-transform: uppercase;
                font-weight: bold;
            }

            .countdown-circles span {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                background: rgba(82, 80, 80, 0.9);
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            }
        </style>
    @endpush
    <div class="container" id="countdown2">
        <div class="row">
            <div class="col-md-12">
                <video playsinline autoplay muted loop id="bgvid">
                    <source src="{{ asset('files/balikturismo.mp4')}}" type="video/mp4">
                </video>
                <div class="rounded text-white text-center">
                    <div id="clock-b" class="countdown countdown-circles d-flex flex-wrap justify-content-center pt-4"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center" id="balikturismo" display="none">

        <div class="row bg-secondary slider">
            <div class="offset-md-2 col-md-8 my-4">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-thumbnail" src="http://localhost:8000/storage/Slider/QtFfKkBnObrWKPLZMXskSGIfzVuj1iQdEB8PXRPl.png" class="d-block img-fluid" alt="Los Angeles" width="800" height="500">
                        </div>
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
            <div class="col-md-4 py-3 border-right border-bottom">
                <img class="rounded" src="{{asset('temp_img/goldberry.jpeg')}}" alt="" width="170" height="200">                
            </div>

            <div class="col-md-4 py-3 border-left border-bottom border-right">
                <img class="rounded"  src="{{asset('temp_img/pacificceburesort.jpeg')}}" alt="" width="170" height="200">
            </div>

            <div class="col-md-4 py-3 border-left border-bottom">
                <img class="rounded"  src="{{asset('temp_img/savoy.jpeg')}}" alt="" width="170" height="200">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 py-3 border-right border-bottom">
                <img class="rounded"  src="{{asset('temp_img/whitesands.jpeg')}}" alt="" width="170" height="200">
            </div>

            <div class="col-md-4 py-3 border-left border-bottom border-right">
                <img class="rounded"  src="{{asset('temp_img/jparkisland.jpeg')}}" alt="" width="170" height="200">
            </div>

            <div class="col-md-4 py-3 border-left border-bottom">
                <img class="rounded"  src="{{asset('temp_img/beresort.jpeg')}}" alt="" width="170" height="200">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 py-3 border-right border-bottom">
                <img class="rounded"  src="{{asset('temp_img/crimson.jpeg')}}" alt="" width="170" height="200">
            </div>

            <div class="col-md-4 py-3 border-left border-bottom border-right">
                <img  class="rounded" src="{{asset('temp_img/bluewater.jpeg')}}" alt="" width="180" height="200">
            </div>

            <div class="col-md-4 py-3 border-left border-bottom">
                <img  class="rounded" src="{{asset('temp_img/waterfront.jpeg')}}" alt="" width="170" height="200">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 py-3 border-right border-bottom">
                <img class="rounded"  src="{{asset('temp_img/tambuli.jpeg')}}" alt="" width="170" height="200">
            </div>

            <div class="col-md-4 py-3 border-left border-bottom border-right">
                <img  class="rounded" src="{{asset('temp_img/costabella1.jpg')}}" alt="" width="180" height="200">
            </div>

            <div class="col-md-4 py-3 border-left border-bottom">
                <img  class="rounded" src="{{asset('temp_img/egi1.jpg')}}" alt="" width="170" height="200">
            </div>
        </div>
    </div>


    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
        <script>
         $(function () {
            $('#clock-b').countdown('2020/10/12').on('update.countdown', function(event) {
                var $this = $(this).html(event.strftime(''
                    + '<div class="m-2"><span class="h1 font-weight-bold">%D</span> <h4>DAY%!d<h4></div>'
                    + '<div class="m-2"><span class="h1 font-weight-bold">%H</span> <h4>Hr</h4></div>'
                    + '<div class="m-2"><span class="h1 font-weight-bold">%M</span> <h4>Min</h4></div>'
                    + '<div class="m-2"><span class="h1 font-weight-bold">%S</span> <h4>Sec</h4></div>'));

                    balikturismo.style.display = 'none';
                }).on('stoped.countdown', function(event){
                    var countdown = document.getElementById("countdown2");
                    var balikturismo = document.getElementById('balikturismo');


                        countdown.style.display = 'none';
                        balikturismo.style.display = 'block';
  
                });
        });
        </script>
    @endpush
    
@endsection

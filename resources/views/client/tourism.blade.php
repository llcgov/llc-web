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
    <div class="container">
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
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
        <script>
         $(function () {
            $('#clock-b').countdown('2020/10/17').on('update.countdown', function(event) {
                var $this = $(this).html(event.strftime(''
                    + '<div class="m-2"><span class="h1 font-weight-bold">%D</span> <h4>DAY%!d<h4></div>'
                    + '<div class="m-2"><span class="h1 font-weight-bold">%H</span> <h4>Hr</h4></div>'
                    + '<div class="m-2"><span class="h1 font-weight-bold">%M</span> <h4>Min</h4></div>'
                    + '<div class="m-2"><span class="h1 font-weight-bold">%S</span> <h4>Sec</h4></div>'));
                });
            });
        </script>
    @endpush
    
@endsection

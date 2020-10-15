@extends('client.layout.master')
@section('content')
    @push('css')
        <style>
            .promos{
                height: 90vh;
            }

            .overlay {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(113, 120, 122, 0.5);
                overflow: hidden;
                width: 0;
                height: 100%;
                transition: .5s ease;
                border-top-right-radius: 40px;
            }

            .container2{
                position: relative;
                display: inline-block;
            }

            
            .container2:hover .overlay {
                width: 75%;
            }

            .p2:hover{
                opacity: .6;
            }
            
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
                <div class="p2 rounded text-white text-center">
                    <div id="clock-b" class="countdown countdown-circles d-flex flex-wrap justify-content-center pt-4"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center" id="balikturismo" display="none">

        <div class="row bg-warning rounded slider">
            <div class="offset-md-2 col-md-8 my-4">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-thumbnail" src="{{asset('temp_img/balikturismo.jpg')}}" class="d-block img-fluid" alt="Los Angeles" width="800" height="500">
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
            <div class="container2 col-md-4 py-5 border-right border-bottom">
                <img class="p2 rounded" src="{{asset('temp_logo/goldberry.jpg')}}" alt="" width="170" height="70">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#goldberry"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="http://www.mactan.goldberrysuites.com/" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>
                
                  <div class="modal fade" id="goldberry" tabindex="-1" role="dialog" aria-labelledby="goldBerryModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content bg-primary">
                        <div class="modal-body">
                            <img class="img-thumbnail promos" src="{{asset('temp_img/goldberry.jpeg')}}" class="d-block img-fluid" alt="Los Angeles">
                        </div>
                      </div>
                    </div>
                  </div>


            </div>

            <div class="container2 col-md-4 py-5 border-left border-bottom border-right">
                <img class="p2 rounded"  src="{{asset('temp_logo/pacificceburesort.jpg')}}" alt="" width="170" height="100">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#pacific"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="http://pacificcebu-resort.com/" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>

                <div class="modal fade" id="pacific" tabindex="-1" role="dialog" aria-labelledby="pacificModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bg-primary">
                            <div class="modal-body">
                                <img class="img-thumbnail promos" src="{{asset('temp_img/pacificceburesort.jpeg')}}" class="d-block img-fluid" alt="Los Angeles">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container2 col-md-4 py-5 border-left border-bottom">
                <img class="p2 rounded"  src="{{asset('temp_logo/savoy.png')}}" alt="" width="150" height="100">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#savoy"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="https://savoyhotelmactan.com.ph/home/" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>
                <div class="modal fade" id="savoy" tabindex="-1" role="dialog" aria-labelledby="pacificModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bg-primary">
                            <div class="modal-body">
                                <img class="img-thumbnail promos" src="{{asset('temp_img/savoy.jpeg')}}" class="d-block img-fluid" alt="Los Angeles">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container2 col-md-4 py-5 border-right border-bottom">
                <img class="p2 rounded"  src="{{asset('temp_logo/whitesands.jpg')}}" alt="" width="120" height="100">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#cebuwhitesands"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="https://www.facebook.com/cebuwhitesandsresortandspa/" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>
                <div class="modal fade" id="cebuwhitesands" tabindex="-1" role="dialog" aria-labelledby="pacificModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bg-primary">
                            <div class="modal-body">
                                <img class="img-thumbnail promos" src="{{asset('temp_img/whitesands.jpeg')}}" class="d-block img-fluid" alt="Los Angeles">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container2 col-md-4 py-5 border-left border-bottom border-right">
                <img class="p2 rounded"  src="{{asset('temp_logo/jparkisland.png')}}" alt="" width="170" height="70">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#jpark"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="https://www.jparkislandresort.com/" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>
                <div class="modal fade" id="jpark" tabindex="-1" role="dialog" aria-labelledby="pacificModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bg-primary">
                            <div class="modal-body">
                                <img class="img-thumbnail promos" src="{{asset('temp_img/jparkisland.jpeg')}}" class="d-block img-fluid" alt="Los Angeles">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container2 col-md-4 py-5 border-left border-bottom">
                <img class="p2 rounded"  src="{{asset('temp_logo/beresort.jpg')}}" alt="" width="120" height="100">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#beresortmactan"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="https://beresortmactan.com/" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>
                <div class="modal fade" id="beresortmactan" tabindex="-1" role="dialog" aria-labelledby="pacificModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bg-primary">
                            <div class="modal-body">
                                <img class="img-thumbnail promos" src="{{asset('temp_img/beresort.jpeg')}}" class="d-block img-fluid" alt="Los Angeles">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container2 col-md-4 py-5 border-right border-bottom">
                <img class="p2 rounded"  src="{{asset('temp_logo/crimson.png')}}" alt="" width="170" height="100">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#crimsonhotel"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="https://crimsonhotel.com/boracay/offers?type=room_offers" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>
                <div class="modal fade" id="crimsonhotel" tabindex="-1" role="dialog" aria-labelledby="pacificModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bg-primary">
                            <div class="modal-body">
                                <img class="img-thumbnail promos" src="{{asset('temp_img/crimson.jpeg')}}" class="d-block img-fluid" alt="Los Angeles">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container2 col-md-4 py-5 border-left border-bottom border-right">
                <img  class="p2 rounded" src="{{asset('temp_logo/bluewater.png')}}" alt="" width="180" height="100">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#bluewatermaribago"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="http://www.bluewatermaribago.com.ph/" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>
                <div class="modal fade" id="bluewatermaribago" tabindex="-1" role="dialog" aria-labelledby="pacificModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bg-primary">
                            <div class="modal-body">
                                <img class="img-thumbnail promos" src="{{asset('temp_img/bluewater.jpeg')}}" class="d-block img-fluid" alt="Los Angeles">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container2 col-md-4 py-5 border-left border-bottom">
                <img  class="p2 rounded" src="{{asset('temp_logo/waterfront.png')}}" alt="" width="170" height="100">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#waterfronthotels"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="https://www.waterfronthotels.com.ph/" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>
                <div class="modal fade" id="waterfronthotels" tabindex="-1" role="dialog" aria-labelledby="pacificModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bg-primary">
                            <div class="modal-body">
                                <img class="img-thumbnail promos" src="{{asset('temp_img/waterfront.jpeg')}}" class="d-block img-fluid" alt="Los Angeles">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container2 col-md-4 py-5 border-right border-bottom">
                <img class="p2 rounded"  src="{{asset('temp_logo/tambuli.png')}}" alt="" width="170" height="120">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#tambuliseasideresortandspa"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="https://tambuliseasideresortandspa.com/" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>
                <div class="modal fade" id="tambuliseasideresortandspa" tabindex="-1" role="dialog" aria-labelledby="pacificModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bg-primary">
                            <div class="modal-body">
                                <img class="img-thumbnail promos" src="{{asset('temp_img/tambuli.jpeg')}}" class="d-block img-fluid" alt="Los Angeles">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container2 col-md-4 py-5 border-left border-bottom border-right">
                <img  class="p2 rounded" src="{{asset('temp_logo/costabella.png')}}" alt="" width="180" height="80">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#costabellaresort"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="https://costabellaresort.com/" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>
                <div class="modal fade" id="costabellaresort" tabindex="-1" role="dialog" aria-labelledby="pacificModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bg-primary">
                            <div class="modal-body">
                                <div id="costabella2" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-thumbnail promos" src="{{asset('temp_img/costabella1.jpg')}}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-thumbnail promos" src="{{asset('temp_img/costabella2.jpg')}}" alt="Second slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#costabella2" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#costabella2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container2 col-md-4 py-5 border-left border-bottom">
                <img  class="p2 rounded" src="{{asset('temp_logo/egi.jpg')}}" alt="" width="150" height="100">
                <div class="overlay">
                    <div class="text m-4 p-4">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#egiresortandhotel"><span class="text-bold">BROWSE</span></button><br><br>
                        <a href="https://www.egiresortandhotel.com/" target="_blank"><button class="btn btn-primary"><span class="text-bold">VISIT</span></button></a>
                    </div>
                </div>
                <div class="modal fade" id="egiresortandhotel" tabindex="-1" role="dialog" aria-labelledby="pacificModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content bg-primary">
                            <div class="modal-body">
                                <div id="egi4" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-thumbnail promos" src="{{asset('temp_img/egi1.jpg')}}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-thumbnail promos" src="{{asset('temp_img/egi2.jpg')}}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item ">
                                            <img class="img-thumbnail promos" src="{{asset('temp_img/egi3.jpg')}}" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-thumbnail promos" src="{{asset('temp_img/egi4.jpg')}}" alt="Fourth slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#egi4" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#egi4" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

@extends('clientv2.layout.master')

@section('content')

  <div class="container-fluid px-0 pt-5 mt-5">
    <div id="carouselImageSlider" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            @foreach ($images as $key => $image_count)
                <li data-target="#demo" data-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : ''}}"></li>
            @endforeach
        </ul>
        <div class="carousel-inner bg-info" role="listbox">
            @foreach ($images as $key_image => $image)
                <div class="carousel-item {{ $key_image == 0 ? 'active': ''}}">
                    <div class="min-vhd d-flex align-items-center justify-content-center">
                        <img class="img-thumbnail" src="{{ url( 'storage/' . $image->path . '/' . $image->name) }}" class="d-block img-fluid" alt="Los Angeles" width="1300" height="500">
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselImageSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselImageSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
  
  {{-- Content Section --}}
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>News</h2>
          <p>OPON Updates</p>
      </div>
      <div class="row">
        <div class="col-lg-10 pt-4 offset-md-2 content">
          <div id="carouselPostSlider" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                @foreach ($posts as $key => $post_count)
                    <li data-target="#demo" data-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : ''}}"></li>
                @endforeach
            </ul>
              <div class="carousel-inner">
                @foreach ($posts as $key_post => $post)
                    <div class="carousel-item {{ $key_post == 0 ? 'active': ''}}">
                        <div class="">
                          <h3>{{ $post->title }}</h3>
                          {!! $post->content !!}
                        </div>
                    </div>
                @endforeach
              </div>
              <a class="carousel-control-prev news" href="#carouselPostSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next news" href="#carouselPostSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        
      </div>
    </div>
  </section>




  {{-- About Section --}}

  <main id="main">
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>About</h2>
            <p>About OPON</p>
        </div>
        <div class="row">
          <div class="col-lg-2 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-10 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>The City of Lapu-Lapu is noted for being tourist haven for her historical spots,</h3>
              <p class="font-italic">The City of Lapu-Lapu is noted for being tourist haven for her historical spots, her beautiful, pristine sandy shores and white sand beaches on one side of the island city, more particularly in the coastal barangays of Marigondon, Agus, Suba-basbas, Maribago, Mactan and Pta. Engaño also made The City of Lapu-Lapu a major weekend destination of the population of Metro Cebu and nearby towns.</p><p>The existence of plush beach resorts made it a prime tourist destination of the country, consistently attracting domestic and foreign tourists to spend their vacations. The other side of the island facing Cebu, has no sandy shores.</p>
              <a href="{{ route('client.about') }}" class="learn-more-btn">Learn More</a>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
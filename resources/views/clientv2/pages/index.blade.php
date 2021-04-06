@extends('clientv2.layout.master')

@section('content')

    {{-- Hero Section --}}
  {{-- <section id="hero" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
          <h1>Learning Today,<br>Leading Tomorrow</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <a href="courses.html" class="btn-get-started">Get Started</a>
      </div>
  </section> --}}
  
  <div class="container-fluid px-0 pt-4 mt-5">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
            {{-- <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <h1 class="display-1">TWO</h1>
                </div>
            </div> --}}
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
  
  {{-- Content Section --}}
  <main id="main">
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>About</h2>
            <p>About OPON</p>
        </div>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>The City of Lapu-Lapu is noted for being tourist haven for her historical spots,</h3>
              <p class="font-italic">The City of Lapu-Lapu is noted for being tourist haven for her historical spots, her beautiful, pristine sandy shores and white sand beaches on one side of the island city, more particularly in the coastal barangays of Marigondon, Agus, Suba-basbas, Maribago, Mactan and Pta. Engaño also made The City of Lapu-Lapu a major weekend destination of the population of Metro Cebu and nearby towns.</p><p>The existence of plush beach resorts made it a prime tourist destination of the country, consistently attracting domestic and foreign tourists to spend their vacations. The other side of the island facing Cebu, has no sandy shores.</p>
              <a href="about.html" class="learn-more-btn">Learn More</a>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
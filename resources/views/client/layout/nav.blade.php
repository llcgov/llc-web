<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    {{-- <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><h5>HOME</h5> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h5 class="dropdown-toggle">ABOUT</h5>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ACTION</a>
          <a class="dropdown-item" href="#">ANOTHER ACTION</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">SOMETHING ELSE HERE</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h5 class=" dropdown-toggle">TRANSPARENCY </h5>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ACTION</a>
          <a class="dropdown-item" href="#">ANOTHER ACTION</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">SOMETHING ELSE HERE</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h5  class="dropdown-toggle">DIRECTORY</h5>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ACTION</a>
          <a class="dropdown-item" href="#">ANOTHER ACTION</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">SOMETHING ELSE HERE</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><h5>GALLERY</h5> <span class="sr-only">(current)</span></a>
      </li>
    </ul> --}}
    <nav class="navbar-nav mr-auto text-light">
      <h6 class="font-weight-light font-italic">The official website of the City of Lapu-Lapu</h6>
    </nav>
    
    <h6 class="text-light">{{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->format('l, F d, Y H:i') }} </h6> 
    <h5 class="text-light px-2"> | </h5>
    <a href="https://www.facebook.com/lapulapucitygovernment/" class="text-decoration-none pr-2"><h6 class="text-light"> <i class="fab fa-facebook-square"> </i> Lapu-Lapu City Government</h6></a>
    {{-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>
</nav>
<div class="container-fluid">
  {{-- <div class="row"> --}}
    {{-- <div class="col-md-3 my-3">
      <img src="{{ asset('img/pg-new.png') }}" alt="llc-logo.png" height="140px">
    </div> --}}
    <div class="my-2">
      <img src="{{ asset('img/banner.jpg') }}" alt="llc-logo.png" width="100%" height="200px">
    </div>
    {{-- <div class="col-md-3">
      <img src="{{ asset('img/pg-new.png') }}" alt="llc-logo.png" height="100px" width="100px">
    </div>
    <div class="col-md-3">
      <img src="{{ asset('img/pg-new.png') }}" alt="llc-logo.png" height="100px" width="100px">
    </div> --}}
  {{-- </div> --}}
</div>
<div class="container">
  <div class="row navbar navbar-expand-lg navbar-dark bg-primary">
    {{-- <div class="col-md-5"></div> --}}
    <div class="col-md-9 offset-md-3">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active" >
          <a class="nav-link" href="#"><h5 class="font-weight-bold"> HOME</h5> <span class="sr-only">(current)</span></a></li>
        <li class="nav-item active" >
          <a class="nav-link" href="#">
            <h5 class="font-weight-bold"> 
              ONLINE SERVICES
            </h5> 
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#">
            <h5 class="font-weight-bold">  
              DEPARTMENTS
            </h5> 
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#">
            <h5 class="font-weight-bold">  
              TRANSPARANCY
            </h5> 
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#">
            <h5 class="font-weight-bold"> 
              CONTACT US
            </h5> 
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
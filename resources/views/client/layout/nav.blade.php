<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <nav class="navbar-nav mr-auto text-light">
      <h6 class="font-weight-light font-italic">The official website of the City of Lapu-Lapu</h6>
    </nav>
    <h6 class="text-light">{{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->format('l, F d, Y H:i') }} </h6> 
    <h6 class="text-light px-2"> | </h6>
    <a href="https://www.facebook.com/lapulapucitygovernment/" class="text-decoration-none pr-2"><h6 class="text-light"> <i class="fab fa-facebook-square"> </i> Lapu-Lapu City Government</h6></a>
  </div>
</nav>
<div class="container-fluid">
    <div class="my-2">
      <img src="{{ asset('img/banner.jpg') }}" alt="llc-logo.png" width="100%" height="200px">
    </div>
</div>
  <div class="row navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="offset-md-4 col-md-4 offset-md-4">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active" >
          <a class="nav-link" href="#"><h6 class="font-weight-bold"> HOME</h6> <span class="sr-only">(current)</span></a></li>
        <li class="nav-item active" >
          <a class="nav-link" href="#">
            <h6 class="font-weight-bold"> 
              ONLINE SERVICES
            </h6> 
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#">
            <h6 class="font-weight-bold">  
              DEPARTMENTS
            </h6> 
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#">
            <h6 class="font-weight-bold">  
              TRANSPARANCY
            </h6> 
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#">
            <h6 class="font-weight-bold"> 
              CONTACT US
            </h6> 
            <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

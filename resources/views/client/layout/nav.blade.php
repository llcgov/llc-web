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
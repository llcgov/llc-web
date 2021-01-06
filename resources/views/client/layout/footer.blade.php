<div class="bg-primary">
    <div class="offset-md-3 col-md-6 mt-4">
            <div class="row text-light">
                <div class="col-md-4">
                    <img src="{{ asset('img/pg-new.png') }}" alt="llc-logo.png" width="75%">
                </div>
                <div class="col-md-3 mt-4">
                    <a href="#" class="text-decoration-none text-light"><h6>HOME</h6></a>
                    <a href="#" class="text-decoration-none text-light"><h6>ONLINE SERVICES</h6></a>
                    <a href="#" class="text-decoration-none text-light"><h6>DEPARTMENTS</h6></a>
                    <a href="#" class="text-decoration-none text-light"><h6>TRANSPARENCY</h6></a>
                    <a href="#" class="text-decoration-none text-light"><h6>ABOUT LAPU-LAPU CITY</h6></a>
                    <a href="#" class="text-decoration-none text-light"><h6>ABOUT THE MAYOR</h6></a>
                </div>
                <div class="col-md-5 mt-4">
                    <h4><strong>CONTACT INFORMATION</strong></h4>
                    <div>
                        <h5><strong>Hotline: </strong> (032)-340 2124</h5>
                        
                        <h5> <strong>Office Hours: </strong> 8:00 AM - 5:00 PM Monday to Friday</h5>

                        <h5> <strong>Email Address: </strong> info@lapulapucity.gov.ph</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <script src="{{ asset('js/sb-admin.js') }}"></script>

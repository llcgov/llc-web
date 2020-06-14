    <div class="container-fluid nav-bg">
      <div class="row">
          <div class="offset-md-1 col-md-5">
                <img src="{{ asset('img/republic_of_ph_white.png') }}" alt="llc-logo.png" class="mw-100 ml-3 mt-2">
          </div>
      </div>
    </div>
    <div class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="row offset-md-2 col-md-8">
            {{-- <div class=""> --}}
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.home') }}">
                        <h4 class="font-weight-light text-light"> HOME</h4>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <h4 class="font-weight-light text-light dropdown-toggle">
                            ONLINE SERVICE
                        </h4></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><h5 class="font-weight-light">New/Renew Business Permit</h5></a>
                        <a class="dropdown-item" href="#"><h5 class="font-weight-light">Local Civil Registry Services</h5></a>
                        <a class="dropdown-item" href="#"><h5 class="font-weight-light">Cedula</h5></a>
                        <a class="dropdown-item" href="#"><h5 class="font-weight-light">Tax Declaration</h5></a>
                        {{-- <a class="dropdown-item" href="{{ route('client.requests') }}"><h5 class="font-weight-light">Exemption Request Form</h5></a> --}}
                        {{-- <a class="dropdown-item" href="{{ route('client.sap') }}"><h5 class="font-weight-light">SAP Qualifiers</h5></a> --}}
                    </div>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="font-weight-light text-light">
                            DEPARTMENTS
                        </h4>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="{{ route('client.transparency') }}" role="button" aria-haspopup="true" aria-expanded="true">
                        <h4 class="font-weight-light text-light dropdown-toggle">
                            TRANSPARENCY
                        </h4></a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('client.transparency') }}"><h5 class="font-weight-light">Full Disclosure Data</h5></a>
                      <a class="dropdown-item" href="{{ route('client.eo') }}"><h5 class="font-weight-light">Executive Order</h5></a>
                      {{-- <a class="dropdown-item" href="{{ route('client.eo') }}"><h5 class="font-weight-light">City Ordinance</h5></a> --}}
                      <a class="dropdown-item" href="#"><h5 class="font-weight-light">Citizen's Chart</h5></a>
                    </div>
                  </li>
                {{-- <li class="nav-item" >
                    <a class="nav-link" href="{{ route('client.about')}}" aria-expanded="true">
                            <h4 class="font-weight-light text-light">
                                ABOUT LAPU-LAPU
                            </h4></a>
                        <span class="sr-only">(current)</span>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <h4 class="font-weight-light text-light dropdown-toggle">
                            ABOUT
                        </h4></a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('client.aboutcity') }}"><h5 class="font-weight-light">About Lapu-Lapu City</h5></a>
                      {{-- <a class="dropdown-item" href="{{ route('client.aboutmayor') }}"><h5 class="font-weight-light">About the Mayor</h5></a> --}}
                    </div>
                  </li>
            </ul>
            {{-- </div> --}}
        </div>

    </div>

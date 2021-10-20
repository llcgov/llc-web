@extends('clientv2.layout.master')

@section('content')
    <div class="container pt-5 mt-5">
      <h4>Safety Seal Request</h4>
      <div class="row mt-5 mb-5">
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Lapulapu City Hall Access Rd, Lapu-Lapu City, Cebu</p>
                </div>
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>lapulapucitysafetyseal@gmail.com</p>
                </div>
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+63 999 999 9999</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-8 mt-5 mt-lg-0">
  
              <form action="{{ route('client.createsealrequest') }}" method="POST" class="php-email-form">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="contactNo" id="contact" placeholder="Contact No." required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="estName" id="est_name" placeholder="Establishment Name" required>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="estAddress" id="est_address" placeholder="Establishment Address" required>
                  </div>
                <div class="text-center"><button class="btn get-started-btn" type="submit" value="submit">Send Request</button></div>
              </form>
  
            </div>
            @if(isset($flag) && $flag === 1)
              <div class="alert alert-success">add record successful</div>
             @endif
          </div>

    </div>
@endsection
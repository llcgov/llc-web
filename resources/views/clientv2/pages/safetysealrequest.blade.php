@extends('clientv2.layout.master')
@section('content')
    <div class="container pt-5 mt-5">
      <div class="text-center">
        <h4>Safety Seal Request</h4>
        @include('clientv2.pages.messages')

      </div>


      <div class="row mt-5 mb-5">
            <div class="col-md-4">
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

            <div class="col-md-8">
              <form action="{{ route('client.createseal') }}" method="POST" class="php-email-form">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="email_add">Email address</label>
                    <input type="email" class="form-control" id="email_add" aria-describedby="emailHelp" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="full_name">Name</label>
                    <input type="text" class="form-control" id="full_name" name="name">
                  </div>
  
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="contact">Contact No.</label>
                    <input type="text" class="form-control" id="contact" name="contactNo">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="estab">Establishment</label>
                    <input type="text" class="form-control" id="estab" name="estName">
                  </div>
  
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="estab_address">Establishment Address</label>
                    <input type="text" class="form-control" id="estab_address" name="estAddress">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    {{-- <input type="submit" class="btn btn-primary">Submit</button> --}}
                    <button type="submit" class="btn btn-primary"> Submit</button>
  
                  </div>
                </div>
              </form>
            </div>


          </div>

    </div>
@endsection
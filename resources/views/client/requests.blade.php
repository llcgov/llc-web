@extends('client.layout.master')

@section('content')
<div class="container my-4">
  <h3 class="text-center">Select Exemption Type</h3>
  {{-- <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F1597892066938019%2Fvideos%2F2281064598857138%2F&show_text=0&width=560" width="100%" height=500px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe> --}}
  <div class="py-1">
    <div class="my-4 text-center">
      <a href="{{ route('client.employees') }}"><button class="btn btn-primary btn-lg w-50">Employees From Exempt Establishment With Private Vehicles</button></a>
    </div>
    <div class="my-4 text-center">
      <a href="{{ route('client.delivery') }}"><button class="btn btn-primary btn-lg w-50">Delivery Vehicles Of Essential Goods</button></a>
    </div>
    <div class="my-4 text-center">
      <a href="{{ route('client.individual') }}"><button class="btn btn-primary btn-lg w-50">Individuals Undergoing Medical Check-ups/Treatment</button></a>
    </div>
    <div class="my-4 text-center">
      <a href="{{ route('client.shuttle') }}"><button class="btn btn-primary btn-lg w-50">Company Shuttle/Vehicles Of Exempt Establishment</button></a>
    </div>
  </div>
</div>



@endsection

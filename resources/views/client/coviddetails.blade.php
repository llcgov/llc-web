@extends('client.layout.master')
@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th><h4>BARANGAY</h4></th>
            <th><h4>PUM</h4></th>
            <th><h4>PUI</h4></th>
            <th><h4>CONFIRMED</h4></th>
            <th><h4>RECOVERED</h4></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($covid as $item)
            <tr>
                <td><h5>{{ $item->barangay }}</h5></td>
                <td><h5>{{ $item->pum }}</h5></td>
                <td><h5>{{ $item->pui }}</h5></td>
                <td><h5>{{ $item->confirmed }}</h5></td>
                <td><h5>{{ $item->recovered }}</h5></td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
    
@endsection

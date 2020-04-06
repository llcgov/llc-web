@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Images</h1>
  </div>

  <div class="container-fluid">
    
        <div class="tab-content mt-4">
            <div id="gallery" class="tab-pane active">
                <table class="table">
                    <thead>
                        <tr>
                        <form action="{{ route('covidcase.store')}}" method="POST">
                            @csrf
                            <td><input type="text" class="form-control" placeholder="Barangay" name="barangay" value="{{ !empty($covid->barangay) ? $covid->barangay : '' }}"></td>
                            <td><input type="text" class="form-control" placeholder="Confirmed" name="confirmed" value="{{ !empty($covid->confirmed) ? $covid->confirmed : '' }}"></td>
                            <td><input type="text" class="form-control" placeholder="PUIs" name="pui" value="{{ !empty($covid->pui) ? $covid->pui : '' }}"></td>
                            <td><input type="text" class="form-control" placeholder="PUMs" name="pum" value="{{ !empty($covid->pum) ? $covid->pum : '' }}"></td>
                            <td><input type="text" class="form-control" placeholder="Recovered" name="recovered" value="{{ !empty($covid->recovered) ? $covid->recovered : '' }}"></td>
                            <td><input type="text" class="form-control" placeholder="Deaths" name="deaths" value="{{ !empty($covid->deaths) ? $covid->deaths : '' }}"></td>
                            <td><input type="text" class="form-control" placeholder="PUIs Tested" name="pui_tested" value="{{ !empty($covid->pui_tested) ? $covid->pui_tested : '' }}"></td>
                            <td><input type="text" class="form-control" placeholder="Date Posted" name="date_posted" value="{{ !empty($covid->date_posted) ? $covid->date_posted : '' }}"></td>
                            <td><input type="submit" value="UPDATE" class="form-control bg-primary text-white"></td>
                        </form>
                        </tr>
                        <tr>
                            <th scope="col">Barangay</th>
                            <th scope="col">Confirmed Cases</th>
                            <th scope="col">PUIs</th>
                            <th scope="col">PUMs</th>
                            <th scope="col">Recovered</th>
                            <th scope="col">DEATHS</th>
                            <th scope="col">PUIs Tested</th>
                            <th scope="col">Date Posted</th>
                        </tr>
                    </thead>
                    <tbody>
                           
                        @foreach ($covid as $item)
                            <tr>
                                <td>{{ $item->barangay }}</td>
                                <td>{{ $item->confirmed_case }}</td>
                                <td>{{ $item->pui }}</td>
                                <td>{{ $item->pum }}</td>
                                <td>{{ $item->recovered }}</td>
                                <td>{{ $item->deaths }}</td>
                                <td>{{ $item->pui_tested }}</td>
                                <td>{{ $item->date_posted }}</td>
                            </tr>    
                        @endforeach
                       
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Images</h1>
  </div>

  <div class="container-fluid">
    
        <div class="tab-content mt-4">
            <div id="gallery" class="tab-pane active">
                <form action="{{ route('covid-case-details.store')}}" method="POST">
                    @csrf
                    <div class="row p-2">
                        <div class="col-md-4">
                            <select name="barangay" id="barangay" class="form-control">
                                <option value="">Barangay</option>
                                <option value="Agus" class="form-control">Agus</option>
                                <option value="Babag" class="form-control">Babag</option>
                                <option value="Bankal" class="form-control">Bankal</option>
                                <option value="Basak" class="form-control">Basak</option>
                                <option value="Baring" class="form-control">Baring</option>
                                <option value="Buaya" class="form-control">Buaya</option>
                                <option value="Calawisan" class="form-control">Calawisan</option>
                                <option value="Canjulao" class="form-control">Canjulao</option>
                                <option value="Caohagan" class="form-control">Caohagan</option>
                                <option value="Caubian" class="form-control">Caubian</option>
                                <option value="Caw-oy" class="form-control">Caw-oy</option>
                                <option value="Gun-ob" class="form-control">Gun-ob</option>
                                <option value="Ibo" class="form-control">Ibo</option>
                                <option value="Looc" class="form-control">Looc</option>
                                <option value="Mactan" class="form-control">Mactan</option>
                                <option value="Marigondon" class="form-control">Marigondon</option>
                                <option value="Maribago" class="form-control">Maribago</option>
                                <option value="Pajac" class="form-control">Pajac</option>
                                <option value="Pajo" class="form-control">Pajo</option>
                                <option value="Pangan-an" class="form-control">Pangan-an</option>
                                <option value="Poblacion" class="form-control">Poblacion</option>
                                <option value="Punta Engano" class="form-control">Punta Engano</option>
                                <option value="Pusok" class="form-control">Pusok</option>
                                <option value="Sabang" class="form-control">Sabang</option>
                                <option value="San Vicente" class="form-control">San Vicente</option>
                                <option value="Sta. Rosa" class="form-control">Sta. Rosa</option>
                                <option value="Subabasbas" class="form-control">Subabasbas</option>
                                <option value="Talima" class="form-control">Talima</option>
                                <option value="Tingo" class="form-control">Tingo</option>
                                <option value="Tungasan" class="form-control">Tungasan</option>
                            </select>
                       
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Confirmed" name="confirmed" value="{{ !empty($covid->confirmed) ? $covid->confirmed : '' }}">

                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="PUIs" name="pui" value="{{ !empty($covid->pui) ? $covid->pui : '' }}">

                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="PUMs" name="pum" value="{{ !empty($covid->pum) ? $covid->pum : '' }}">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Recovered" name="recovered" value="{{ !empty($covid->recovered) ? $covid->recovered : '' }}">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Deaths" name="deaths" value="{{ !empty($covid->deaths) ? $covid->deaths : '' }}">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="PUIs Tested" name="pui_tested" value="{{ !empty($covid->pui_tested) ? $covid->pui_tested : '' }}">

                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" placeholder="Date Posted" name="date_posted" value="{{ !empty($covid->date_posted) ? $covid->date_posted : '' }}">

                        </div>
                        <div class="col-md-4">
                            <input type="submit" value="UPDATE" class="form-control bg-primary text-white">
                            
                        </div>
                    </div>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Barangay</th>
                            <th scope="col">Confirmed Cases</th>
                            <th scope="col">PUIs</th>
                            <th scope="col">PUMs</th>
                            <th scope="col">Recovered</th>
                            <th scope="col">DEATHS</th>
                            <th scope="col">PUIs Tested</th>
                            <th scope="col">Date Posted</th>
                            <th scope="col">Action</th>
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
                                <td><form action="{{ route('covid-case-details.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="#"> <button class="btn btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</button></a></td>
                            </tr>    
                        @endforeach
                       
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
            new SlimSelect({
                select: '#barangay'
            });
        </script>
@endpush
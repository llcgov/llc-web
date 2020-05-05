@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Images</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="container-fluid">

        <ul class="nav nav-tabs">
            <li class="nav-item nav-link active"><a data-toggle="tab" href="#gallery">SAP Per Barangay</a></li>
            <li class="nav-item nav-link" ><a data-toggle="tab" href="#images">Upload SAP Per Barangay</a></li>
        </ul>
    
        <div class="tab-content mt-4">
            <div id="gallery" class="tab-pane active">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Name</th>
                            <th scope="col">Barangay</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sap as $item)
                        <tr>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->path}}</td>
                            <td>
                                <form action="{{ route('sap.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="#"> <button class="btn btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>

            <div id="images" class="tab-pane">
                <div class="row">
                    <div class="container">
                        <form action="{{ route('sap.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="title">Name</label>
                                    <input type="text" placeholder="Name" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="file" name="name" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
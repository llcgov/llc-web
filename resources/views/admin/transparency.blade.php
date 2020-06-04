@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Images</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="container-fluid">

        <ul class="nav nav-tabs">
            <li class="nav-item nav-link active"><a data-toggle="tab" href="#gallery">Transparency Files</a></li>
            <li class="nav-item nav-link" ><a data-toggle="tab" href="#images">Upload Transparencies</a></li>
        </ul>
    
        <div class="tab-content mt-4">
            <div id="gallery" class="tab-pane active">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Document Title</th>
                            <th scope="col">Type</th>
                            <th scope="col">Year</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transparency as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->type}}</td>
                            <td>{{ $item->year}}</td>
                            <td>
                                <form action="{{ route('transparencies.destroy', $item->id)}}" method="POST">
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
                  {{ $transparency->links() }}

            </div>

            <div id="images" class="tab-pane">
                <div class="row">
                    <div class="container">
                        <form action="{{ route('transparencies.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="title">Name</label>
                                    <input type="text" placeholder="Document Name" name="title" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="year">Year</label>
                                    <select name="year" id="year" class="form-control">
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="title">Responsible Offices/Functionaries</label>
                                    <input type="text" placeholder="Responsible Offices/Functionaries" name="functionaries" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="title">Type</label>
                                    <input type="text" placeholder="Document Type" name="type" class="form-control">
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
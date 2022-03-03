@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Departments</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="container-fluid">

        <ul class="nav nav-tabs">
            <li class="nav-item nav-link active"><a data-toggle="tab" href="#gallery">Departments List</a></li>
            <li class="nav-item nav-link" ><a data-toggle="tab" href="#images">Create Departments</a></li>
        </ul>
    
        <div class="tab-content mt-4">
            <div id="gallery" class="tab-pane active">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Office</th>
                            <th scope="col">Information</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $item)
                        <tr>
                            <th scope="row"><img src="{{ url( 'storage/' . $item->path . '/' . $item->name) }}" width="100" alt=""></th>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->office}}</td>
                                <td>{{ $item->description}}</td>
                                <td><a href="{{ route('images.delete', $item->id) }}"><button class="btn btn-danger">Danger</button></a><a href="#"> <button class="btn btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            <div id="images" class="tab-pane">
                <div class="row">
                    <div class="container">
                        <form action="{{ route('departments.store') }}" method="POST">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Name">Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                         
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="office">Office</label>
                                            <input type="text" name="office" class="form-control" placeholder="Office">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{-- <input type="tex" name="name" class="form-control"> --}}
                                            Description
                                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                         </div>
                                    </div>
                                </div>
                            {{-- <div class="form-group">
                                <select name="type" id="" class="form-control">
                                    <option value="Banner">Banner</option>
                                    <option value="Background">Background</option>
                                    <option value="Posts">Posts</option>
                                    <option value="Slider">Slider</option>
                                </select>
                            </div> --}}
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
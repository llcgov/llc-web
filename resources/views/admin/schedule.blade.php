@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Images</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="container-fluid">

        <ul class="nav nav-tabs">
            <li class="nav-item nav-link active"><a data-toggle="tab" href="#gallery">Schedules</a></li>
            <li class="nav-item nav-link" ><a data-toggle="tab" href="#images">Create Schedules</a></li>
        </ul>
    
        <div class="tab-content mt-4">
            <div id="gallery" class="tab-pane active">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $item)
                        <tr>
                            <td>{{ $item->title}}</td>
                            <td>{{ $item->start}}</td>
                            <td>{{ $item->end}}</td>
                            <td>
                                <form action="{{ route('schedules.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="#"> <button class="btn btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</button></a>
                            </td>
                                {{-- <a href="{{ route('posts.destroy', $item) }}"><button class="btn btn-danger">Danger</button></a> --}}
                                {{-- <a href="#"> <button class="btn btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</button></a> --}}
                          
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>

            <div id="images" class="tab-pane">
                <div class="row">
                    <div class="container">
                        <form action="{{route('schedules.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" placeholder="Schedule Title" name="title" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="URL">URL</label>
                                        <input type="text" placeholder="URL" name="url" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="URL">Date Start</label>
                                        <input type="date" placeholder="Start" name="start" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="URL">Date End</label>
                                        <input type="date" placeholder="End" name="end" class="form-control">
                                    </div>
                                </div>
                            </div> 
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Images</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="container-fluid">

        <ul class="nav nav-tabs">
            <li class="nav-item nav-link active"><a data-toggle="tab" href="#gallery">Gallery</a></li>
            <li class="nav-item nav-link" ><a data-toggle="tab" href="#images">Images</a></li>
            <li class="nav-item nav-link"><a data-toggle="tab" href="#menu2">Menu 2</a></li>
        </ul>
    
        <div class="tab-content mt-4">
            <div id="gallery" class="tab-pane active">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Path</th>
                            <th scope="col">Type</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $item)
                        <tr>
                            <th scope="row"><img src="{{ url( 'storage/' . $item->path . '/' . $item->name) }}" width="100" alt=""></th>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->path}}</td>
                            <td>{{ $item->type}}</td>
                            <td><a href="{{ route('images.delete', $item->id) }}"><button class="btn btn-danger">Danger</button></a><a href="#"> <button class="btn btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>

            <div id="images" class="tab-pane">
                <div class="row">
                    <div class="container">
                        <form action="{{route('images.upload')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <select name="type" id="" class="form-control">
                                    <option value="Banner">Banner</option>
                                    <option value="Background">Background</option>
                                    <option value="Posts">Posts</option>
                                    <option value="Slider">Slider</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="menu2" class="tab-pane">
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
        </div>
    </div>
@endsection
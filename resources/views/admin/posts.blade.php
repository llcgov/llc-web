@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Images</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="container-fluid">

        <ul class="nav nav-tabs">
            <li class="nav-item nav-link active"><a data-toggle="tab" href="#gallery">Posts</a></li>
            <li class="nav-item nav-link" ><a data-toggle="tab" href="#images">Create Posts</a></li>
        </ul>
    
        <div class="tab-content mt-4">
            <div id="gallery" class="tab-pane active">
                <table class="table">
                    <thead>
                        <tr>
 
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $item)
                        <tr>
                            <td>{{ $item->title}}</td>
                            <td>{{ $item->content}}</td>
                            <td><a href="{{ route('posts.destroy', $item) }}"><button class="btn btn-danger">Danger</button></a><a href="#"> <button class="btn btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>

            <div id="images" class="tab-pane">
                <div class="row">
                    <div class="container">
                        <form action="{{route('posts.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" placeholder="Post Title" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control" rows="5"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
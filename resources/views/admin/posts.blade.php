@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">POSTS</h1>
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
                            <th>Image</th>
                            <th>Video Url</th>
                            <th>Headline</th>
                            <th>Content</th>
                            <th>Date Posted</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $item)
                        <tr>
                            <td><img src="{{ !empty($item->media()->first()->path) ? url( 'storage/' . $item->media()->first()->path . '/' . $item->media()->first()->name) : '' }}" width="100"></td>
                            <td><iframe src="{{ $item->video_url}}" frameborder="0"></iframe></td>
                            <td>{{ $item->headline }}</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                View Content
                              </button></td>
                            <td>{{ $item->date_posted}}</td>
                          
                        </tr>
                        {{-- Modal --}}
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg" style="max-width: 1200px;" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-center" id="exampleModalLongTitle">{{ $item->headline}}</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">                                  
                                    <p id="text-content"></p>
                                    @push('scripts')
                                        <script>
                                            var pp = {!! json_encode($item->toArray()) !!};
                                            document.getElementById('text-content').innerHTML = pp.content;
                                        </script>
                                    @endpush  
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{ route('posts.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{ route('posts.edit', $item->id) }}"> <button class="btn btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</button></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                    </tbody>
                  </table>
            </div>

            <div id="images" class="tab-pane">
                <div class="row">
                    <div class="container">
                        <form action="{{route('posts.store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" placeholder="Post Title" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Headline</label>
                                <input type="text" placeholder="Headline" name="headline" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Video URL</label>
                                <input type="text" placeholder="Video URL" name="video_url" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="postcontent" row="8"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" name="name" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="type" id="" class="form-control">
                                            <option value="Posts">Posts</option>
                                            <option value="Slider">News</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="post_type" class="form-control">
                                            <option value="Tourism">Tourism</option>
                                            <option value="Events">Events</option>
                                            <option value="Jobs">Jobs</option>
                                            <option value="Bids">Bids And Awards</option>
                                            <option value="News">Latest News</option>
                                            <option value="Serbisyo">Libreng Serbisyo</option>
                                            <option value="Sports">Sports</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="date" name="date_posted" class="form-control">
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

@push('scripts')
<script src="https://cdn.tiny.cloud/1/sm401jmgnvll4zpk0sphqogk2mnxf4n9mevuwetqlhfme9a6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#postcontent',
            height : "480"
        });
    </script>
@endpush
@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">POSTS</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <form action="#" method="POST">
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
                                <textarea name="content" class="form-control" rows="5"></textarea>
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
@endsection
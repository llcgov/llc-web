@extends('admin.layout.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> EDIT POST</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <form action="#" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" placeholder="Post Title" name="title" value="{{ $post->title }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Headline</label>
                                <input type="text" placeholder="Headline" name="headline" value="{{ $post->headline }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Video URL</label>
                                <input type="text" placeholder="Video URL" name="video_url" value="{{ $post->vide_url }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="postcontent" row="8">{{$post->content }}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="post_type" class="form-control">
                                            <option value="Tourism" {{ $post->post_type == "Tourism" ? "Selected": "" }}>Tourism</option>
                                            <option value="Events" {{ $post->post_type == "Events" ? "Selected": "" }}>Events</option>
                                            <option value="Jobs" {{ $post->post_type == "Jobs" ? "Selected": "" }}>Jobs</option>
                                            <option value="Bids" {{ $post->post_type == "Bids" ? "Selected": "" }}>Bids And Awards</option>
                                            <option value="News" {{ $post->post_type == "News" ? "Selected": "" }}>Latest News</option>
                                            <option value="Serbisyo" {{ $post->post_type == "Serbisyo" ? "Selected": "" }}>Libreng Serbisyo</option>
                                            <option value="Sports" {{ $post->post_type == "Sports" ? "Selected": "" }}>Sports</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="date_posted" value="{{ $post->date_posted }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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
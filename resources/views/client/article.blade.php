@extends('client.layout.master')

@section('content')
    <div class="container">
        <div class="row m-5">
            @if (!empty($post->media()->first()->path))
                <div class="col-md-6">
                    <img class="img-thumbnail" src="{{ !empty($post->media()->first()->path) ? url( 'storage/' . $post->media()->first()->path . '/' . $post->media()->first()->name) : '' }}" alt="">
                </div>
                <div class="col-md-6">
                    {{-- <span class="font-content"><p> {{ $post->title}}</p></span> --}}
                    <span class="font-content"><p> {{ $post->content}}</p></span>
                    <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($post->created_at))}}</span>
                </div>
            @else
                <div class="col-md-12">
                    {{-- <span class="font-content"><p> {{ $post->title}}</p></span> --}}
                    <span class="font-content"><p> {{ $post->content}}</p></span>
                    <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($post->created_at))}}</span>
                </div>
            @endif
            
            {{-- <div class="col-md-12">
                <span class="font-content"><p> {{ $post->title}}</p></span>
                <span class="font-content"><p> {{ $post->content}}</p></span>
                <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($post->created_at))}}</span>
            </div>                                             --}}
        </div>
    </div>
@endsection
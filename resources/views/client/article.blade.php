@extends('client.layout.master')

@section('content')
    <div class="container">
        <div class="row m-5">
            <span class="font-headline text-center"><h3> {{ $post->headline}}</h3></span>

            @if (!empty($post->media()->first()->path))
                <div class="col-md-6">
                    <img class="img-thumbnail" src="{{ !empty($post->media()->first()->path) ? url( 'storage/' . $post->media()->first()->path . '/' . $post->media()->first()->name) : '' }}" alt="">
                </div>
                <div class="col-md-6">
                    <span class="font-content text-justify"><p id="text-content"></p></span>
                    <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($post->created_at))}}</span>
                    @if ($post->video_url)
                        <br>
                        <iframe src="{{ $post->video_url }}" frameborder="0"></iframe>         
                    @endif
                </div>
                
            @else
                <div class="col-md-12"><span class="font-content text-justify"><p id="text-content"></p></span>
                    <span class="text-uppercase font-content small text-muted"> {{ date('d-m-Y', strtotime($post->created_at))}}</span>




                    @if ($post->video_url)
                        <br>
                        <iframe src="{{ $post->video_url }}" frameborder="0"></iframe>         
                    @endif  
                </div>
            @endif

        </div>
    </div>
@endsection

@push('scripts')

<script>
    var pp = {!! json_encode($post->toArray()) !!};
    // console.log(pp.content);
    document.getElementById('text-content').innerHTML = pp.content;
</script>
@endpush

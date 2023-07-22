@extends('front.layouts.app')

@section('content')
<div class="row tm-row">
    @foreach($posts as $post)
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="{{ route('posts.show', $post->id) }}" class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                <img src="assets/front/img/img-01.jpg" alt="Image" class="img-fluid">
            </div>
            @if(filled($post->status))
            <span class="position-absolute tm-new-badge">New{{ ['New'][$post->status] }}</span>
            @endif
            <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{ $post->name }}</h2>
        </a>
        <p class="tm-pt-30">
            {{ substr($post->desc, 0, 50) }}...
        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary">
                @foreach($post->tags as $tag)
                    {{ $tag->name }}
                @endforeach
            </span>
            <span class="tm-color-primary">June 24, 2020</span>
            <span class="tm-color-primary">views - {{ $post->views }}</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <span>{{ count($post->comments) }} comments</span>
            <span>by {{ $post->author }}</span>
        </div>
    </article>
    @endforeach
    @if(count($posts) === 0)
    There is nothing there for now !
    @endif 
</div>
{{-- Pagination --}}
    {{ $posts->links('vendor.pagination.custom') }}
@endsection

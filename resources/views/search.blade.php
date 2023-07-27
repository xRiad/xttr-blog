@extends('front.layouts.app')

@section('content')         
<div class="row tm-row">
    @foreach($posts as $post)    
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="{{ route('posts.detail', $post->slug) }}" class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                <img src="{{  strpos($post->img, "images/") === 0 ? asset("storage/".$post->img) : asset("assets/front/img/img-01.jpg")}}" alt="Image" class="img-fluid">                            
            </div>
            @if(filled($post->status))
            <span class="position-absolute tm-new-badge">{{ $post->status->name }}</span>
            @endif
            <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{ $post->name }}</h2>
        </a>                    
        <p class="tm-pt-30">
            {!! substr($post->desc, 0, 200) !!}...
        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary">
                @foreach($post->tags as $tag) 
                {{ $tag->name }}
                    @if(!($loop->last))
                        .
                    @endif
                @endforeach
            </span>
            <span class="tm-color-primary">{{ $post->date }}</span>
            <span class="tm-color-primary">views: {{ $post->views }}</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <span>{{ count($post->comments) }} comments</span>
            <span>by {{ $post->author }}</span>
        </div>
    </article>  
    @endforeach
    @if(count($posts) === 0)
    <div class="alert-primary alert">There is nothing there for now !</div>
    @endif
</div>
{{-- Pagination --}}
    {{ $posts->links('vendor.pagination.custom') }}
@endsection



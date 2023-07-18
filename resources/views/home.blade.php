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
            <span class="tm-color-primary">Travel . Events</span>
            <span class="tm-color-primary">June 24, 2020</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <span>36 comments</span>
            <span>by {{ $post->author }}</span>
        </div>
    </article>  
    @endforeach
</div>
{{-- Pagination --}}
<div class="row tm-row tm-mt-100 tm-mb-75">
    <div class="tm-prev-next-wrapper">
        @if ($posts->currentPage() > 1)
        <a href="{{ $posts->previousPageUrl() }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
        @else
        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
        @endif

        @if ($posts->hasMorePages())
        <a href="{{ $posts->nextPageUrl() }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
        @else
        <a href="#" class="mb-2 tm-btn tm-btn-primary disabled tm-prev-next">Next</a>
        @endif
    </div>
    <div class="tm-paging-wrapper">
        <span class="d-inline-block mr-3">Page</span>
        <nav class="tm-paging-nav d-inline-block">
            <ul>
                @foreach($posts as $post)
                <li class="tm-paging-item active {{ $posts->currentPage() == $loop->iteration ? 'active' : '' }}">
                    <a href="{{ $post->url }}" class="mb-2 tm-btn tm-paging-link">{{ $loop->iteration }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>                
</div>
@endsection

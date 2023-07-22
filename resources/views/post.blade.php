@extends('front.layouts.app')

@section('content')
<div class="row tm-row">
    <div class="col-12">
        <hr class="tm-hr-primary tm-mb-55">
        <!-- Video player 1422x800 -->
        <video width="954" height="535" controls class="tm-mb-40">
            <source src="{{asset($post->video)}}" type="video/mp4">							  
            Your browser does not support the video tag.
        </video>
    </div>
</div>
<div class="row tm-row">
    <div class="col-lg-8 tm-post-col">
        <div class="tm-post-full">                    
            <div class="mb-4">
                <h2 class="pt-2 tm-color-primary tm-post-title">{{ $post->name }}</h2>
                <p class="tm-mb-40">{{ $post->date }} posted by {{ $post->author }}</p>
                <p>
                    {{ $post->desc }}
                </p>
                <span class="d-block text-right tm-color-primary">
                    @foreach($post->tags as $tag) 
                    {{ $tag->name }}
                        @if(!($loop->last))
                         .
                        @endif
                    @endforeach
                </span>
            </div>
            
            <!-- Comments -->
            <div>
                <h2 class="tm-color-primary tm-post-title">Comments</h2>
                <hr class="tm-hr-primary tm-mb-45">
                @foreach($post->comments as $comment)
                <div class="tm-comment tm-mb-45">
                    <figure class="tm-comment-figure">
                        <img src="{{asset('assets/front/img/comment-1.jpg')}}" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                        <figcaption class="tm-color-primary text-center">{{ $comment->name }}</figcaption>
                    </figure>
                    <div>
                        <p>
                            {{ $comment->commentary_content }}
                        </p>
                        <div class="d-flex justify-content-between">
                            <span class="tm-color-primary">{{ $comment->date }}</span>
                        </div>                                                 
                    </div>                                
                </div>
                @endforeach
                <form action="{{ route('comment.save', ['postid' => $post->id]) }}" enctype="multipart/form-data" method="POST" class="mb-5 tm-comment-form">
                    @csrf
                    <h2 class="tm-color-primary tm-post-title mb-4">Your comment</h2>
                    <div class="mb-4">
                        <input class="form-control @error('name') is-invalid @enderror" name="name" placeholder="name" type="text" required> 
                        @error('name')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email" type="email" required>
                        @error('email')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="message" rows="6" required></textarea>
                        @error('message')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-right">
                        <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>                        
                    </div>                                
                </form>

            </div>
        </div>
    </div>
    <aside class="col-lg-4 tm-aside-col">
        <div class="tm-post-sidebar">
            @if(count($categories) !== 0)
            <hr class="mb-3 tm-hr-primary">
            <h2 class="mb-4 tm-post-title tm-color-primary">Categories</h2>
            <ul class="tm-mb-75 pl-5 tm-category-list">
                @foreach($categories as $category)
                <li><a href="{{ route('search.category', $category->id) }}" class="tm-color-primary">{{ $category->name }}</a></li>
                @endforeach
            </ul>
            @endif
            @if(count($relatedPosts) !== 0)
            <hr class="mb-3 tm-hr-primary">
            <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>
            @foreach($relatedPosts as $post)
            <a href="#" class="d-block tm-mb-40">
                <figure>
                    <img src="img/img-02.jpg" alt="Image" class="mb-3 img-fluid">
                    <figcaption class="tm-color-primary">{{$post->name}}</figcaption>
                </figure>
            </a>
            @endforeach
            @endif
        </div>                    
    </aside>
</div>
@endsection

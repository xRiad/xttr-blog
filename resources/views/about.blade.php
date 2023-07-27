@extends('front.layouts.app')
@section('content')
<div class="row tm-row tm-mb-45">
    <div class="col-12">
        <hr class="tm-hr-primary tm-mb-55">
        <img src="{{ strpos($about->img, "images/") === 0 ? asset("storage/".$about->img) : asset("assets/front/img/about-01.jpg")}}" alt="Image" class="img-fluid">
    </div>
</div>
<div class="row tm-row tm-mb-40">
    <div class="col-12">                    
        <div class="mb-4">
            <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">{{ $about->title }}</h2>
            <p>
                {{ $about->content }}
            </p>                            
        </div>                    
    </div>
</div>
<div class="row tm-row tm-mb-120">
    @foreach($cards as $card)
    <div class="col-lg-4 tm-about-col">
        <div class="tm-bg-gray tm-about-pad">
            <div class="text-center tm-mt-40 tm-mb-60"> 
                <i class="{!! $card->icon !!}"></i>              
            </div>                        
            <h2 class="mb-3 tm-color-primary tm-post-title">{{ $card->title }}</h2>
            <p class="mb-0 tm-line-height-short">
                {{ $card->content }}
            </p>
        </div>
    </div>
    @endforeach
</div>        
<div class="row tm-row tm-mb-60">
    <div class="col-12">
        <hr class="tm-hr-primary  tm-mb-55">
    </div>                
    @foreach($employes as $employe)
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="{{ strpos($employe->avatar, "images/") === 0 ? asset("storage/".$employe->avatar) : asset("assets/front/img/about-03.jpg") }}" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2">{{ $employe->name }}</h2>
                <h3 class="tm-h3 mb-3">{{ $employe->position }}</h3>
                <p class="mb-0 tm-line-height-short">
                    {{ $employe->about }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>        
@endsection
@extends('front.layouts.app')

@section('content')    
<div class="row tm-row tm-mb-45">
    <div class="col-12">
        <hr class="tm-hr-primary tm-mb-55">
        <div class="gmap_canvas"> <!-- Google Map -->
            <iframe width="100%" height="477" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>                
</div>
<div class="row tm-row tm-mb-120">
    <div class="col-12">
        <h2 class="tm-color-primary tm-post-title tm-mb-60">Contact Us</h2>
    </div>
    <div class="col-lg-7 tm-contact-left">
        <form method="POST" action="{{ route('contact.save') }}" class="mb-5 ml-auto mr-0 tm-contact-form">                        
            @csrf
            <div class="form-group row mb-4">
                <label for="name" class="col-sm-3 col-form-label text-right tm-color-primary">Name</label>
                <div class="col-sm-9">
                    <input class="form-control mr-0 ml-auto @error('name') is-invalid @enderror" name="name" id="name" type="text" required>                            
                    @error('name')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-4">
                <label for="email" class="col-sm-3 col-form-label text-right tm-color-primary">Email</label>
                <div class="col-sm-9">
                    <input class="form-control mr-0 ml-auto @error('email') is-invalid @enderror" name="email" id="email" type="email" required>
                    @error('email')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-4">
                <label for="subject" class="col-sm-3 col-form-label text-right tm-color-primary">Subject</label>
                <div class="col-sm-9">
                    <input class="form-control mr-0 ml-auto @error('subject') is-invalid @enderror" name="subject" id="subject" type="text" required>
                    @error('subject')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-5">
                <label for="message" class="col-sm-3 col-form-label text-right tm-color-primary">Message</label>
                <div class="col-sm-9">
                    <textarea class="form-control mr-0 ml-auto @error('message') is-invalid @enderror" name="message" id="message" rows="8" required></textarea>                                
                    @error('message')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row text-right">
                <div class="col-12">
                    <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>                        
                </div>                            
            </div>                                
        </form>
    </div>
    <div class="col-lg-5 tm-contact-right">
        <address class="mb-4 tm-color-gray">
            {{ $contact->adress ?? '' }}
        </address>
        <span class="d-block">
            Tel:
            <a href="tel:{{ $contact->phone ?? '' }}" class="tm-color-gray">{{ $contact->phone ?? 'Nothing there for now...' }}</a>
        </span>
        <span class="mb-4 d-block">
            Email:
            <a href="mailto:{{ $contact->email ?? '' }}" class="tm-color-gray">{{ $contact->email ?? 'Nothing there for now...' }}</a>
        </span>
        <p class="mb-5 tm-line-height-short">
            {{ $contact->info ?? '' }}
        </p>
        <ul class="tm-social-links">
            <li class="mb-2">
                <a href="https://facebook.com/{{ $contact->facebook ?? '' }}" class="d-flex align-items-center justify-content-center">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://twitter.com/{{ $contact->twitter ?? '' }}" class="d-flex align-items-center justify-content-center">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://youtube.com/{{ $contact->youtube ?? '' }}" class="d-flex align-items-center justify-content-center">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://instagram.com/{{ $contact->instagram ?? '' }}" class="d-flex align-items-center justify-content-center mr-0">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        </ul>
    </div>
</div>      
@endsection
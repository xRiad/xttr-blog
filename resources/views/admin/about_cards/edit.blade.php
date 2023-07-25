@extends('admin.layouts.app')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          @if(session('success'))
                            <h3 class="card-title">{{ session('success') }}</h3>
                          @elseif(session('failure'))
                            <h3 class="card-title">{{ session('failure') }}</h3>
                          @endif
                        </div>
                        <!-- /.card-header -->
                        <div class="row1 ">
                        </div>

                        <div class="card-body">
                          <form enctype="multipart/form-data" action="{{ route('admin.about-cards.update', $card->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="exampleinputemail1">Title</label>
                              <input type="text" name="title" value="{{ old('title', $card->title) }}" class="form-control @error('title') is-invalid @enderror" placeholder="title">
                              @error('title')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">Content</label>
                              <input type="text" name="content" value="{{ old('content', $card->content) }}" class="form-control @error('content') is-invalid @enderror" placeholder="content">
                              @error('content')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">Icon class</label>
                              <input type="text" name="icon" value="{{ old('icon', $card->icon) }}" class="form-control @error('icon') is-invalid @enderror" placeholder="icon">
                              @error('icon')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <button type="submit">submit</button>
                          </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
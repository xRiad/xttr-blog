@extends('admin.layouts.app')


@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          @if(session('success'))
                            <h3 class="card-title alert alert-success">{{ session('success') }}</h3>
                          @elseif(session('failure'))
                            <h3 class="card-title alert-danger alert">{{ session('failure') }}</h3>
                          @endif
                        </div>
                        <!-- /.card-header -->
                        <div class="row1 ">
                        </div>

                        <div class="card-body">
                          <form enctype="multipart/form-data" action="{{ route('admin.about.update', $about->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="exampleinputemail1">Title</label>
                              <input type="text" name="title" value="{{ old('title', $about->title) }}" class="form-control @error('title') is-invalid @enderror" placeholder="title">
                              @error('title')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="about_content">About content</label>
                              <textarea name="about_content" id="summernote">{!! old('about_content', $about->about_content) !!}</textarea>
                              @error('about_content')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputfile">file input</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" name="img" class="custom-file-input" id="exampleinputfile">
                                  <label class="custom-file-label" for="exampleinputfile">choose file</label>
                                </div>
                                <div class="input-group-append">
                                  <span class="input-group-text">upload</span>
                                </div>
                              </div>
                              @error('img')
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
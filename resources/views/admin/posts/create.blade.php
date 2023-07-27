@extends('admin.layouts.app')


@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          {{session('failure')}}
                          @if(session('success'))
                            <h3 class="card-title alert-success alert">{{ session('success') }}</h3>
                          @elseif(session('failure'))
                            <h3 class="card-title alert-danger alert">{{ session('failure') }}</h3>
                          @endif
                        </div>
                        <!-- /.card-header -->
                        <div class="row1 ">
                        </div>


                        <div class="card-body">
                          <form enctype="multipart/form-data" action="{{ route('admin.posts.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                              <label for="exampleinputemail1">post name</label>
                              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="name">
                              @error('name')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">author</label>
                              <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" placeholder="author">
                              @error('author')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputfile">video</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" name="video" class="custom-file-input" id="exampleinputfile">
                                  <label class="custom-file-label" for="exampleinputfile">choose file</label>
                                </div>
                                <div class="input-group-append">
                                  <span class="input-group-text">upload</span>
                                </div>
                              </div>
                              @error('video')
                              <div class="alert alert-danger">
                                {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="desc">description</label>
                              <textarea name="description" id="summernote"></textarea>
                              @error('description')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            @if(count($statuses) > 0)
                            {{-- add tags_posts thing --}}
                            <div class="form-group">
                              <label>statuses</label>
                              <select name="status" class="form-control select2" style="width: 100%;">
                                @foreach($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                                <option selected value="0">no status</option>
                                @endforeach
                                @error('status')
                                <div class="alert alert-danger">
                                  {{$message}}
                                </div>
                                @enderror
                              </select>
                            </div>
                            @endif
                            @if(count($categories) > 0)
                            <div class="form-group">
                              <label>categories</label>
                              <select name="category" class="form-control select2" style="width: 100%;">
                                @foreach($categories as $category)
                                <option value="{{ $category->slug }}">{{ $category->name }}</option>
                                @endforeach
                                <option selected value="0">no category</option>
                              </select>
                              @error('category')
                              <div class="alert alert-danger">
                                {{$message}}
                              </div>
                              @enderror
                            </div>
                            @endif
                            @if(count($tags) > 0)
                            {{-- add tags_posts thing --}}
                              <div class="form-group">
                                <label>tags</label>
                                <select class="select2" name="tags[]" multiple="multiple" data-placeholder="select a tag" style="width: 100%;">
                                  @foreach($tags as $tag)
                                  <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                            @endif
                            <div class="form-group">
                              <label for="exampleinputfile">image</label>
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
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" name="visibility" value="1" class="custom-control-input" id="customswitch1" checked>
                                  <label class="custom-control-label" for="customswitch1">visbility</label>
                                </div>
                                @error('visibility')
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
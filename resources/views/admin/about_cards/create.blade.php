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
                          @endif
                        </div>
                        <!-- /.card-header -->
                        <div class="row1 ">
                        </div>


                        <div class="card-body">
                          <form enctype="multipart/form-data" action="{{ route('admin.about-cards.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                              <label for="exampleinputemail1">title</label>
                              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="title">
                              @error('title')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">content</label>
                              <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" placeholder="content">
                              @error('content')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">icon</label>
                              <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror" placeholder="icon">
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
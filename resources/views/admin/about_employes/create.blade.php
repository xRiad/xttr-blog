
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
                          <form enctype="multipart/form-data" action="{{ route('admin.about-employes.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                              <label for="exampleinputemail1">name</label>
                              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="name">
                              @error('name')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputfile">file input</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" name="avatar" class="custom-file-input" id="exampleinputfile">
                                  <label class="custom-file-label" for="exampleinputfile">choose file</label>
                                </div>
                                <div class="input-group-append">
                                  <span class="input-group-text">upload</span>
                                </div>
                              </div>
                              @error('avatar')
                              <div class="alert alert-danger">
                                {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">position</label>
                              <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" placeholder="position">
                              @error('position')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">about</label>
                              <input type="text" name="about" class="form-control @error('about') is-invalid @enderror" placeholder="about">
                              @error('about')
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
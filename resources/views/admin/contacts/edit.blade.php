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
                          <form enctype="multipart/form-data" action="{{ route('admin.contact.update', $contact->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="exampleinputemail1">adress</label>
                              <input type="text" name="adress" value="{{ old('adress', $contact->adress) }}" class="form-control @error('adress') is-invalid @enderror" placeholder="adress">
                              @error('adress')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">phone</label>
                              <input type="text" name="phone" value="{{ old('phone', $contact->phone) }}" class="form-control @error('phone') is-invalid @enderror" placeholder="phone">
                              @error('phone')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">email</label>
                              <input type="text" name="email" value="{{ old('email', $contact->email) }}" class="form-control @error('email') is-invalid @enderror" placeholder="email">
                              @error('email')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">info</label>
                              <input type="text" name="info" value="{{ old('info', $contact->info) }}" class="form-control @error('info') is-invalid @enderror" placeholder="info">
                              @error('info')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">facebook</label>
                              <input type="text" name="facebook" value="{{ old('facebook', $contact->facebook) }}" class="form-control @error('facebook') is-invalid @enderror" placeholder="facebook">
                              @error('facebook')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">twitter</label>
                              <input type="text" name="twitter" value="{{ old('twitter', $contact->twitter) }}" class="form-control @error('twitter') is-invalid @enderror" placeholder="twitter">
                              @error('twitter')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">instagram</label>
                              <input type="text" name="instagram" value="{{ old('instagram', $contact->instagram) }}" class="form-control @error('instagram') is-invalid @enderror" placeholder="instagram">
                              @error('instagram')
                              <div class="alert alert-danger">
                                 {{$message}}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleinputemail1">linkedin</label>
                              <input type="text" name="linkedin" value="{{ old('linkedin', $contact->linkedin) }}" class="form-control @error('linkedin') is-invalid @enderror" placeholder="linkedin">
                              @error('linkedin')
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
@extends('admin.layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        {{-- <div class="row1 ">
                          <form action="{{ route('posts.create') }}" method="GET">
                            @csrf
                            <button  class="btn btn-success ml-3 mt-2">Create</button>
                          </form>
                        </div> --}}


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Icon</th>
                                    <th>Delete</th>
                                    <th>EDIT</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($cards as $card)
                                    <tr>
                                        <td>{{$card->id}}</td>
                                        <td>{{$card->title}}</td>
                                        <td>{{$card->content}}</td>
                                        <td>{{$card->icon}}</td>

                                        <td>
                                            <form action="{{ route('admin.about-cards.index', $card->id) }}" method="GET">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

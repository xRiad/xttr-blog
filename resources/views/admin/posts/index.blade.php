@extends('admin.layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Posts</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="row1 ">
                          <form action="{{ route('admin.posts.create') }}" method="GET">
                            @csrf
                            <button  class="btn btn-success ml-3 mt-2">Create</button>
                          </form>
                        </div>


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Post name</th>
                                    <th>Author</th>
                                    <th>Created</th>
                                    <th>Visbility</th>
                                    <th>Status</th>
                                    <th>Tags</th>
                                    <th>Category</th>
                                    <th>Delete</th>
                                    <th>EDIT</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->name}}</td>
                                        <td>{{$post->author}}</td>
                                        <td>{{$post->created_at ?? ''}}</td>
                                        <td>{{$post->visibility === 1 ? 'Visibile' : 'Hidden'}}</td>
                                        <td>{{$post->status->name ?? ''}}</td>
                                        <td>
                                            @foreach($post->tags as $tag)
                                            {{ $tag->name }}
                                            @endforeach
                                        </td>
                                        <td>{{ $post->category->name ?? '' }}</td>

                                        <td>
                                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.posts.edit', $post->id) }}" method="GET">
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

@extends('admin.layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Statuses</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="row1 ">
                          <form action="{{ route('admin.statuses.create') }}" method="GET">
                            @csrf
                            <button  class="btn btn-success ml-3 mt-2">Create</button>
                          </form>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Status name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($statuses as $status)
                                    <tr>
                                        <td>{{$status->id}}</td>
                                        <td>{{$status->name}}</td>
                                        <td>
                                            <form action="{{ route('admin.statuses.edit', $status->id) }}" method="GET">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.statuses.destroy', $status->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
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

@extends('admin.layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <h3 class="card-title">About employes</h3>
                        </div>
                        <div class="row1 ">
                          <form action="{{ route('admin.about-employes.create') }}" method="GET">
                            @csrf
                            <button  class="btn btn-success ml-3 mt-2">Create</button>
                          </form>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>About</th>
                                    <th>Delete</th>
                                    <th>EDIT</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($employes as $employe)
                                    <tr>
                                        <td>{{$employe->id}}</td>
                                        <td>{{$employe->name}}</td>
                                        <td>{{$employe->position}}</td>
                                        <td>{{$employe->about}}</td>
                                        <td>
                                            <form action="{{ route('admin.about-employes.destroy', $employe->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.about-employes.edit', $employe->id) }}" method="GET">
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

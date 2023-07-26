
@extends('admin.layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <h3 class="card-title">Letters</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($letters as $letter)
                                    <tr>
                                        <td>{{$letter->id}}</td>
                                        <td>{{$letter->name}}</td>
                                        <td>{{$letter->email}}</td>
                                        <td>{{$letter->subject}}</td>
                                        <td>{{$letter->message}}</td>

                                        <td>
                                            <form action="{{ route('admin.letter.delete', $letter->id) }}" method="POST">
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

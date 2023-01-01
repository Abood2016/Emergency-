@extends('admin.layouts.app')


@section('mainTitle')
    Patients
@endsection
@section('currentPagetitle')
    Patients
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
              <h3 class="card-title">Patients </h3>
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{-- <ul> --}}
                            {{ Session::get('success') }}
                            {{-- </ul> --}}
                        </div>
                    @endif
                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Username</th>
                                <th>email</th>
                                <th>Create Date</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="text-center">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    {{-- <td>
                                        <form action="" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pl-2">
                        {!! $users->links('pagination::simple-bootstrap-5') !!}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

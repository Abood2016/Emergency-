@extends('admin.layouts.app')


@section('mainTitle')
    Appoinments
@endsection
@section('currentPagetitle')
    Appoinments
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
              <h3 class="card-title">Appoinments </h3>
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
                                <th>User</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $item)
                                <tr class="text-center">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user->username }}</td>
                                    <td>{{ $item->appintment_date }}</td>
                                    <td>
                                        <form action="{{ route('appoinments.delete', $item->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pl-2">
                        {!! $appointments->links('pagination::simple-bootstrap-5') !!}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

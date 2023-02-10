@extends('layout.db')

@section('content')

@if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
  @endif

<div class="col-lg-13 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <p class="card-title mb-0">All Users</p>
    <br><br>
      <div class="table-responsive">
        <table class="table table-striped table-borderless">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Created</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($datap as $item)
            <tr>
                <th scope="row">{{$loop-> iteration}}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                  <a href="/dashboard/{{ $item->id }}/edituser"><button type="button" class="badge badge-primary">   <i class="mdi mdi-border-color"></i> </button></a>

                  <form action="/dashboard/hapususer/{{ $item->id }}" method="POST" onsubmit="return confirm('yakin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="badge badge-danger">  <i class="mdi mdi-delete"></i>  </button>
                  </form>
                </td>
                {{-- <td>
                    @foreach ( $item->student  as $iyah)
                        - {{ $iyah->nama }} <br>
                    @endforeach
                </td> --}}
            </tr>
            @endforeach
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
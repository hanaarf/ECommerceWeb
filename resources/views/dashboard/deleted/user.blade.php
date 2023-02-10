@extends('layout.db')

@section('content')

@if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
  @endif
{{-- tampilan soft dlete --}}


<div class="col-lg-13 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <p class="card-title mb-0">Deleted Users</p><br>
      <button type="button" class="btn btn-primary btn-icon-text text-white btn-sm">
        <i class=" text-white"></i>                                                    
        <a class=" text-white" href="/dashboard/user">Back</a>
      </button>
     <br><br>
      <div class="table-responsive">
        <table class="table table-striped table-borderless">
          <thead>
            <tr>
              <th>#</th>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Pw</th>
              <th>img</th>
              <th>role</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($pengguna as $item)
            <tr>
                <th scope="row">{{$loop-> iteration}}</th>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->pw }}</td>
                <td><img src="../../images/faces/{{ $item->img }}" alt="image" width="50px"/></td>
                <td>{{ $item->roles->name }}</td>
                <td>
                  <a href="/dashboard/{{ $item->id }}/restoreuser"><button type="button" class="badge badge-success">   restore </i> </button></a>

                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
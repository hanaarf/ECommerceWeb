@extends('layout.db')

@section('title','form')

@section('content')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"> Add User</h4>
      <p class="card-description">
        All user <code>.cadbury</code>
      </p><br>

      <form class="forms-sample"  method="POST" action="/dashboard/form-user">
        @csrf
        <div class="form-group">
          <label>Name</label>
          <input name="name" type="text" class="form-control form-control-lg" placeholder="name" aria-label="Username" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input name="email" type="email" class="form-control form-control-lg" placeholder="email" aria-label="Username" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input name="pw" type="password" class="form-control form-control-lg" placeholder="Username" aria-label="Username" autocomplete="off">
        </div>
        <div class="form-group">
          <label>File upload</label>
          <input name="img" type="file" class="file-upload-default">
          <div class="input-group col-xs-12">
            <input name="img" type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
            </span>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Role</label>
            <select name="role_id" class="form-control" id="exampleSelectGender">
              @foreach ($pengguna as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
        </div>
        
        <br>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>

      </form>
    </div>
  </div>
</div>
  
@endsection
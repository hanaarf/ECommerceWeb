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

            <form class="forms-sample" method="POST" action="/dashboard/simpanedituser/{{ $user->id}}">
                @method('put')
                @csrf
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">name</label>
                    <div class="col-sm-9">
                        <input name="name" type="text" class="form-control" id="exampleInputMobile" placeholder="name"
                            autocomplete="off" value="{{ $user->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">email</label>
                    <div class="col-sm-9">
                        <input name="email" type="email" class="form-control" id="exampleInputPassword2"
                            placeholder="email" autocomplete="off" value="{{ $user->email}}">
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">pw</label>
                    <div class="col-sm-9">
                        <input name="password" type="password" class="form-control" id="exampleInputConfirmPassword2"
                            placeholder="password" autocomplete="off" value="{{ $user->password}}">
                    </div>
                </div> --}}
               
                <br>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>

            </form>
        </div>
    </div>
</div>

@endsection

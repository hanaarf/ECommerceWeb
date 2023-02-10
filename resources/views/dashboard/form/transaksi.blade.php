@extends('layout.db')

@section('title','form')

@section('content')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"> Add Transaction</h4>
      <p class="card-description">
        All Transaction <code>.kitkat</code>
      </p><br>
      <form class="forms-sample"  method="POST" action="/dashboard/form-trans" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label">name</label>
          <div class="col-sm-9">
            <input name="name" type="text" class="form-control" id="exampleInputMobile" placeholder="name" autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">email</label>
          <div class="col-sm-9">
            <input name="email" type="text" class="form-control" id="exampleInputPassword2" placeholder="email" autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">product</label>
            <div class="col-sm-9">
              <div class="input-group mb-3">
                <select name="produk_id" class="custom-select" id="inputGroupSelect02">
                  {{-- <option selected>Choose...</option> --}}
                  @foreach ($produk as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
                </select>
              </div>
            </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">qty</label>
          <div class="col-sm-9">
            <input name="qty" type="text" class="form-control" id="exampleInputUsername2" placeholder="qty" autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">address</label>
            <div class="col-sm-9">
              <input name="alamat" type="text" class="form-control" id="exampleInputUsername2" placeholder="alamat" autocomplete="off">
            </div>
          </div>
        <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">message</label>
            <div class="col-sm-9">
              <input name="message" type="text" class="form-control" id="exampleInputUsername2" placeholder="message" autocomplete="off">
            </div>
          </div>
      
        <br>
        <button type="submit" class="btn btn-danger mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
  
@endsection
@extends('layout.db')

@section('title','form')

@section('content')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"> Add Product</h4>
      <p class="card-description">
        All Product <code>.kitkat</code>
      </p><br>
      <form class="forms-sample"  method="POST" action="/dashboard/form-produk" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">img</label>
          <div class="col-sm-9">
              <div class="input-group mb-3">
                  <input name="img" type="file" class="file-upload-default">
                  <div class="input-group col-xs-12">
                      <input name="img" type="text" class="form-control file-upload-info" disabled
                          placeholder="Upload Image">
                      <span class="input-group-append">
                          <button class="file-upload-browse btn btn-danger" type="button">Upload</button>
                      </span>
                  </div>
              </div>
          </div>
      </div>
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label">name</label>
          <div class="col-sm-9">
            <input name="name" type="text" class="form-control" id="exampleInputMobile" placeholder="name" autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">price</label>
          <div class="col-sm-9">
            <input name="price" type="text" class="form-control" id="exampleInputPassword2" placeholder="price" autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">stock</label>
          <div class="col-sm-9">
            <input name="stock" type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="stock" autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">desc</label>
          <div class="col-sm-9">
            <input name="desc" type="text" class="form-control" id="exampleInputUsername2" placeholder="text" autocomplete="off">
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
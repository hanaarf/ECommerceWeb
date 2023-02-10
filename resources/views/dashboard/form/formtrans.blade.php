@extends('layout.db')

@section('title','form')

@section('content')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"> Add Transaction</h4>
      <p class="card-description">
        transaction <code>.cadbury</code>
      </p><br>

      <form class="forms-sample"  method="POST" action="/dashboard/form-transaksi">
        @csrf
        <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">product id</label>
            <div class="col-sm-9">
              <div class="input-group mb-3">
                <select name="produk_id" class="custom-select" id="inputGroupSelect02">
                  {{-- <option selected>Choose...</option> --}}
                  @foreach ($produk as $item)
                <option value="{{ $item->id }}">{{ $item->id }}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>
        <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">user id</label>
            <div class="col-sm-9">
              <div class="input-group mb-3">
                <select name="pengguna_id" class="custom-select" id="inputGroupSelect02">
                  {{-- <option selected>Choose...</option> --}}
                  @foreach ($pengguna as $item)
                <option value="{{ $item->id }}">{{ $item->id }}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">qty</label>
            <div class="col-sm-9">
              <input name="qty" type="text" class="form-control" id="exampleInputMobile" placeholder="qty" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">total payment</label>
            <div class="col-sm-9">
              <input name="total_payment" type="text" class="form-control" id="exampleInputPassword2" placeholder="payment" autocomplete="off">
            </div>
          </div>

        <br>

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>

      </form>
    </div>
  </div>
</div>
  
@endsection
@extends('layout.db')

@section('title',' range ')

@section('content')
{{-- <img src="../../imgcdbry/{{ $item->img }}" alt="image" width="50px"/> --}}
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card ml-7">
        <div class="card position-relative">
          <div class="card-body">
            <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                      <div class="ml-xl-13 mt-3">
                      <h2 class="card-title">Detail Transaction </h2><br>
                      <h2 class="text-primary">Id Trans: {{ $transaksi->id }}</h2>
                      </div>  
                      </div>
                    <div class="col-md-12 col-xl-9">
                      <div class="row">
                        <div class="col-md-6 border-right">
                          <div class="table-responsive mb-3 mb-md-0 mt-3">
                          </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <ul>
                                <li>Produk Id : {{ $transaksi->produk_id }}</li>
                                <li>User Id : {{ $transaksi->pengguna_id }}</li>
                                <li>Qty : {{ $transaksi->qty }}</li>
                                <li>Total Payment : {{ $transaksi->total_payment }}</li>
                              </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
         <div class="d-flex justify-content-between">
          <p class="card-title">Sales Report</p>
          <a href="#" class="text-info">View all</a>
         </div>
          <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
          <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
          <canvas id="sales-chart"></canvas>
        </div>
      </div>
    </div>


@endsection
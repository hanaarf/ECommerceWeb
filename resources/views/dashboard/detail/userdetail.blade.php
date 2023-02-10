@extends('layout.db')

@section('title',' range ')

@section('content')
{{-- <img src="../../imgcdbry/{{ $item->img }}" alt="image" width="50px"/> --}}
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card position-relative">
          <div class="card-body">
            <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                      <div class="ml-lg-40 mt-3">
                      <h1 class="card-title">hello, welcome  </h1>
                        
                        <h3 class="font-weight-500 mb-xl-4 text-primary"> {{ $pengguna->name }}</h3>
                        <p>user's biodata :</p>
                        <ul> 
                            <li><p class="mb-2 mb-xl-0">email : {{ $pengguna->email }}</p></li>
                            <li><p class="mb-2 mb-xl-0">pass : {{ $pengguna->pw }}</p></li>
                            <li> <p class="mb-2 mb-xl-0">role : {{ $pengguna->roles->name }}</p></li>
                        </ul>
                      </div>  
                      </div>
                    <div class="col-md-12 col-xl-9">
                      <div class="row">
                        <div class="col-md-6 border-right">
                          <div class="table-responsive mb-3 mb-md-0 mt-3">
                            
                          </div>
                        </div>
                        <div class="col-md-6 mt-3">
                          <img src="../../images/faces/{{ $pengguna->img }}" alt="image" height="250px" alt="" style="margin-left: 50px; border-radius: 10px; margin-top: -10px">
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
@endsection
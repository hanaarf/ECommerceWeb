@extends('layout.db')

@section('title','product single')

@section('content')

{{-- <h3>Single Bars</h3> --}}
  {{-- <div class="row">
    <div class="col-lg-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="row icons-list">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>1</p>
               <img src="{{ 'https://images.sweetauthoring.com/product/100489.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>2</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/57754.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>3</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/90853.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>4</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/100396.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>5</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/100398.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>6</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/89563.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>7</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/80667.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>8</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/57758.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>9</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/100400.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>10</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/92857.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>11</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/57762.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>12</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/100527.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>13</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/80673.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>14</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/57774.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>15</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/80650.png' }}" alt="" width="210px">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <p>16</p>
              <img src="{{ 'https://images.sweetauthoring.com/product/100093.png' }}" alt="" width="210px">
            </div>
            
           
          </div>
        </div>
      </div>
    </div>
</div> --}}

@if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
@endif


  <div class="col-lg-13 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title">Kitkat</h1>
        <p class="card-description">
          kitkat <code>.product</code>
        </p><br>
        <button type="button" class="btn btn-warning btn-icon-text text-white btn-sm">
          <i class=" text-white"></i>                                                    
          <a class=" text-white" href="/dashboard/form-produk">+ add</a>
        </button><br><br>
       
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Img</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>More</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($datap as $item)
              <tr>
                  <th scope="row">{{$loop-> iteration}}</th>
                  <td><img src="../../imgcdbry/{{ $item->img }}" alt="image" width="50px"/></td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->price }}</td>
                  <td>{{ $item->stock }}</td>
                  <td><a href="/dashboard/detailproduk/{{ $item->id }}"><div class="badge badge-success">detail</div></a></td>
                  <td>
                    <a href="/dashboard/{{ $item->id }}/editproduk"><button type="button" class="badge badge-primary">   <i class="mdi mdi-border-color"></i> </button></a>

                    <form action="/dashboard/hapusproduk/{{ $item->id }}" method="POST" onsubmit="return confirm('yakin hapus?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="badge badge-danger">  <i class="mdi mdi-delete"></i>  </button>
                    </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
 {{-- <td>
                      @foreach ( $item->student  as $iyah)
                          - {{ $iyah->nama }} <br>
                      @endforeach
  </td> --}}


  {{-- <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Photo</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Stok</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/100489.png' }}" alt="" > </td>
        <td>cadbury caramilk</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/57754.png' }}" alt="" > </td>
        <td>cadbury crunchie</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/90853.png' }}" alt="" > </td>
        <td>cadbury boost</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/100396.png' }}" alt="" > </td>
        <td>cadbury chomp</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/100398.png' }}" alt="" > </td>
        <td>cadbury curlywurly</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/89563.png' }}" alt="" > </td>
        <td>cadbury darkmilk</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/80667.png' }}" alt="" > </td>
        <td>cadbury doublecreker</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/57758.png' }}" alt="" > </td>
        <td>cadbury wispa</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">9</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/100400.png' }}" alt="" > </td>
        <td>cadbury fudge</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">10</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/92857.png' }}" alt="" > </td>
        <td>cadbury boostprotein</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">11</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/57762.png' }}" alt="" > </td>
        <td>cadbury picnic</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">12</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/100527.png' }}" alt="" > </td>
        <td>cadbury snack</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">13</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/80673.png' }}" alt="" > </td>
        <td>cadbury starbar</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">14</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/57774.png' }}" alt="" > </td>
        <td>cadbury timeout</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">15</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/80650.png' }}" alt="" > </td>
        <td>cadbury twirl1</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
      <tr>
        <th scope="row">16</th>
        <td>7846</td>
        <td> <img src="{{ 'https://images.sweetauthoring.com/product/100093.png' }}" alt="" > </td>
        <td>cadbury twirl2</td>
        <td> $25.00 </td>
        <td>80 </td>
      </tr>
    </tbody>
  </table> --}}
  
@endsection
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #a5072f;
  color: white;
}
</style>
</head>
<body>

<h1 style="align-items: center">Data Transaksi</h1><br>

<table id="customers">
  <tr>
    <th>No</th>
    <th>id transaksi</th>
    <th>pembeli</th>
    <th>produk</th>
    <th>qty</th>
    <th>date</th>
  </tr>
  @php
    $no=1;  
  @endphp
  @foreach ($data as $item)
    <tr>
        <td>{{ $no++ }}</td> 
        <td>{{ $item->id }}</td> 
        <td>{{ $item->name }}</td> 
        <td>{{ $item->produk->name }}</td>
        <td>{{ $item->qty }}</td>
        <td>{{ $item->created_at }}</td>
    </tr>
  @endforeach
</table>

</body>
</html>
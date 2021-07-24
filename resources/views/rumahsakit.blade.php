@extends('template')
@section('title', 'Data Rumah Sakit Rujukan Covid')
@section('content')
<div class="container">
    <h1>Data Rumah Sakit Rujukan Covid</h1>
    <div class="rumah-sakit">
      <div class="card border-secondary mb-3">
        <div class="card-header border-secondary"></div>
        <div class="card-body">
        <table id="table" class="table table-responsive table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Rumah Sakit</th>
                <th scope="col">Alamat</th>
                <th scope="col">Wilayah</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Telepon</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <th>{{$item['name']}}</th>
                <td>{{$item['address']}}</td>
                <td>{{$item['region']}}</td>
                <td>{{$item['province']}}</td>
                <td>{{$item['phone']}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
     </div>
    </div>
</div>
@endsection
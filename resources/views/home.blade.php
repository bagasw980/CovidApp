@extends('template')
@section('title', 'Beranda')
@section('content')
<div class="container">
    <div class="beranda">
        <div class="row">
            <div class="col-sm-6">
                <h1 cla>Selamat Datang di CovidApp</h1>
                <p>CovidApp adalah aplikasi berbasis web yang berfungsi sebagai media informasi penyebaran Covid-19 di Indonesia.</p>
            </div>
            <div class="col-sm-6">
                <img src="../../assets/undraw_organize.svg" alt="" class="col-12">
            </div>
        </div>
        <h3 class="text-center">Data Penyebaran Covid-19 di Indonesia</h3>
        <p class="tanggal text-center">Update : {{$tanggal}}</p>
        <div class="data-indonesia text-center">
            <div class="box">
                <h3>Jumlah Positif</h3>
                <p>{{$totalPositif}} orang<br><span>bertambah {{$tambahPositif}} orang</span></p>
            </div>
            <div class="box">
                <h3>Jumlah Dirawat</h3>
                <p>{{$totalDirawat}} orang<br><span>bertambah {{$tambahDirawat}} orang</span></p>
            </div>
            <div class="box">
                <h3>Jumlah Sembuh</h3>
                <p>{{$totalSembuh}} orang<br><span>bertambah {{$tambahSembuh}} orang</span></p>
            </div>
            <div class="box">
                <h3>Jumlah Meninggal</h3>
                <p>{{$totalMeninggal}} orang<br><span>bertambah {{$tambahMeninggal}} orang</span></p>
            </div>
        </div>
    </div>
</div>
@endsection
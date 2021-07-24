@extends('template')
@section('title', 'Statitiska Antar Provinsi')
@section('content')
<div class="container">
    <h1>Statitiska Data Covid-19 Antar Provinsi</h1>
    <div class="statitiska">
        @foreach ($dataProvinsi as $item)
        <div class="data-provinsi">
            <div class="card border-secondary mb-3">
                <div class="card-header border-secondary">{{$item['attributes']['Provinsi']}}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <div class="col-sm-4 text-center ms-2 me-2">
                            <div class="card bg-secondary border-secondary mb-3">
                                <div class="card-header border-secondary">Kasus Positif</div>
                                <div class="card-body">
                                    <div class="card-text">
                                        {{$item['attributes']['Kasus_Posi']}} orang
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center ms-2 me-2">
                            <div class="card bg-secondary border-secondary mb-3">
                                <div class="card-header border-secondary">Kasus Sembuh</div>
                                <div class="card-body">
                                    <div class="card-text">
                                        {{$item['attributes']['Kasus_Semb']}} orang
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center ms-2 me-2">
                            <div class="card bg-secondary border-secondary mb-3">
                                <div class="card-header border-secondary">Kasus Meninggal</div>
                                <div class="card-body">
                                    <div class="card-text">
                                        {{$item['attributes']['Kasus_Meni']}} orang
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
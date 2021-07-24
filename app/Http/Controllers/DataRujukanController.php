<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataRujukanController extends Controller
{
    public function index()
    {
        $response = Http::get('http://dekontaminasi.com/api/id/covid19/hospitals');
        $data = $response->json();
        // dd($data);
        return view('rumahsakit', ['data' => $data]);
    }
}

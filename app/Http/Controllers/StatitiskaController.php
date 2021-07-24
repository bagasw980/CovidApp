<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StatitiskaController extends Controller
{
    public function index()
    {
        $response = Http::get('http://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
        // dd($data);
        return view('statitiska', ['dataProvinsi' => $data]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $response = Http::get('http://data.covid19.go.id/public/api/update.json');
        $data = $response->json();
        // dd($data);
        $totalPositif = $data['update']['total']['jumlah_positif'];
        $totalSembuh = $data['update']['total']['jumlah_sembuh'];
        $totalDirawat = $data['update']['total']['jumlah_dirawat'];
        $totalMeninggal = $data['update']['total']['jumlah_meninggal'];
        $tambahPositif = $data['update']['penambahan']['jumlah_positif'];
        $tambahSembuh = $data['update']['penambahan']['jumlah_sembuh'];
        $tambahDirawat = $data['update']['penambahan']['jumlah_dirawat'];
        $tambahMeninggal = $data['update']['penambahan']['jumlah_meninggal'];
        $tanggal = $data['update']['penambahan']['tanggal'];
        return view('home', [
            'totalPositif' => $totalPositif,
            'totalDirawat' => $totalDirawat,
            'totalSembuh' => $totalSembuh,
            'totalMeninggal' => $totalMeninggal,
            'tambahPositif' => $tambahPositif,
            'tambahDirawat' => $tambahDirawat,
            'tambahSembuh' => $tambahSembuh,
            'tambahMeninggal' => $tambahMeninggal,
            'tanggal' => $tanggal
        ]);
    }
}

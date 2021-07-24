<?php

namespace App\Http\Controllers;

use App\Models\RegistrasiVaksin;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class RegistrasiVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://dekontaminasi.com/api/id/covid19/hospitals');
        $data = $response->json();
        return view('registrasi', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e = date("d") + 2;
        $now = date("Y-m-$e");
        $request->validate([
            'nik' => ['unique:registrasi_vaksins,nik'],
        ]);
        RegistrasiVaksin::insert([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'lahir' => $request->lahir,
            'nohp' => $request->nohp,
            'tempat' => $request->tempat,
            'kategori' => $request->kategori,
            'alamat' => $request->alamat,
            'jadwal' => $now,
        ]);
        Session::flash('success');
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrasiVaksin  $registrasiVaksin
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data = RegistrasiVaksin::where('nik', $request->nik)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrasiVaksin  $registrasiVaksin
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistrasiVaksin $registrasiVaksin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrasiVaksin  $registrasiVaksin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistrasiVaksin $registrasiVaksin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrasiVaksin  $registrasiVaksin
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrasiVaksin $registrasiVaksin)
    {
        //
    }
}

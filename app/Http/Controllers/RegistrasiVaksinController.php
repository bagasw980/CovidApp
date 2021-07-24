<?php

namespace App\Http\Controllers;

use App\Models\RegistrasiVaksin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $request->validate([
            'nik' => ['unique:registrasi_vaksins,nik'],
        ]);
        RegistrasiVaksin::insert([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'lahir' => $request->lahir,
            'kategori' => $request->kategori,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrasiVaksin  $registrasiVaksin
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrasiVaksin $registrasiVaksin)
    {
        //
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

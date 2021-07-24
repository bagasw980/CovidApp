<?php

namespace App\Http\Controllers;

use App\Models\RegistrasiVaksin;
use Illuminate\Http\Request;

class RegistrasiVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrasi');
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
        //
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

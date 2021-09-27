<?php

namespace App\Http\Controllers;

use App\Models\UsuarioDia;
use Illuminate\Http\Request;

class UsuarioDiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.ganadores.raceday');
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
     * @param  \App\Models\UsuarioDia  $usuarioDia
     * @return \Illuminate\Http\Response
     */
    public function show(UsuarioDia $usuarioDia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsuarioDia  $usuarioDia
     * @return \Illuminate\Http\Response
     */
    public function edit(UsuarioDia $usuarioDia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsuarioDia  $usuarioDia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsuarioDia $usuarioDia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsuarioDia  $usuarioDia
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsuarioDia $usuarioDia)
    {
        //
    }
}
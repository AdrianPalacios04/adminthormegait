<?php

namespace App\Http\Controllers;

use App\Models\Reclamo;
use Illuminate\Http\Request;

class ReclamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamo = Reclamo::all();
        return view('reclamo.index',compact('reclamo'));
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
     * @param  \App\Models\Reclamo  $reclamo
     * @return \Illuminate\Http\Response
     */
    public function show(Reclamo $reclamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reclamo  $reclamo
     * @return \Illuminate\Http\Response
     */
    public function edit(Reclamo $reclamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reclamo  $reclamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reclamo $reclamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reclamo  $reclamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamo $reclamo)
    {
        //
    }
}
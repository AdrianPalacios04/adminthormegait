<?php

namespace App\Http\Controllers;

use App\Models\Premio;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class PremioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prize = Premio::all();
        
        return view('premio.index',compact('prize'));
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
     * @param  \App\Models\Premio  $premio
     * @return \Illuminate\Http\Response
     */
    public function show(Premio $premio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Premio  $premio
     * @return \Illuminate\Http\Response
     */
    public function edit(Premio $premio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Premio  $premio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Premio $premio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Premio  $premio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Premio $premio)
    {
        //
    }
}
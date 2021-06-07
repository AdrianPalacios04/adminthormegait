<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code = Code::all();
        return view('codes.index',compact('code'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->generateRandomString(6);
        return view('codes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $code = Code::create($request->all());
        return redirect('/codes')->with(compact('code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function show(Code $code)
    {
        //
    }
    public function edit(Code $code)
    {
        //
    }
    public function update(Request $request, Code $code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Code $code)
    {
        //
    }
    public  static function generateRandomString($length = 20) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

// https://stackoverflow.com/questions/41297116/how-to-generate-unique-voucher-code-in-laravel-5-2
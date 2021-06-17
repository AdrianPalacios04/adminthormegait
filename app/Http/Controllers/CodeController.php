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
        $code = Code::paginate(15);
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
        $data = [];
        for($i = 1; $i <= $request->get('number'); $i++){
            $data[] = [
                'codes' => $request->get('codes'),
                'f_inicio' => $request->get('f_inicio'),
                'f_final' => $request->get('f_final'),
                'tipo_ticket' => $request->get('tipo_ticket'),
                'cantidad' => $request->get('cantidad'),
                'origen' => $request->get('origen'),
                'uso' => $request->get('uso'),
            ];
        }
        dd($data);
        // Code::upsert($data, [
        //     'codes', 'f_inicio', 'f_final', 'tipo_ticket', 'cantidad', 'origen', 'uso',
        // ]);
        // $notification = "El Codigos se creo correctamente";
        // return redirect('/codes')->with(compact('notification'));
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

// funcion para code generator https://stackoverflow.com/questions/41297116/how-to-generate-unique-voucher-code-in-laravel-5-2

 //validacion de fechas https://es.stackoverflow.com/questions/164408/c%C3%B3mo-puedo-validar-que-una-fecha-sea-mayor-meno-o-igual-a-otra-con-javascript
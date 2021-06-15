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

            // $code = Code::create($request->all());
        // return redirect('/codes')->with(compact('code'));
        // $valores = array();
    
        //$number = $_POST['number'];

        // $f_inicio = $request->input('f_inicio');
        // $f_final = $request->input('f_final');
        // $tipo_ticket = $request->input('tipo_ticket');
        // $cantidad = $request->input('cantidad');
        // $origen = $request->input('origen');
        // $uso = $request->input('uso');
        
        // for ($i=0; $i < $number ; $i++) { 
        //     $num = $this->generateRandomString(6);
        //     array_push($valores,$num);
        // }
        // $data = [];
        // for ($i=0; $i < count($valores) ; $i++) { 
        //     $data[]= [
        //         'codes' => $valores[$i],
        //         // 'f_inicio'=> $f_inicio[$i],
        //         // 'f_final' => $f_final[$i],
        //         // 'tipo_ticket'=> $tipo_ticket[$i],
        //         // 'cantidad' => $cantidad[$i],
        //         // 'origen'=> $origen[$i],
        //         //  'uso' => $uso[$i]

        //     ];
               
        //         // $data = new Code;
        //         // $data->codes = $valores[$i];
        //         // $data->f_inicio = $valores[$i];
        //         // $data->f_final = $valores[$i];
        //         // $data->tipo_ticket = $valores[$i];
        //         // $data->cantidad = $valores[$i];
        //         // $data->origen = $valores[$i];
        //         // $data->uso = $valores[$i];
        //         // 'codes' =>$request['codes'],
        //         // 'f_inicio'=>$request['f_inicio'],
        //         // 'f_final'=>$request['f_final'],
        //         // 'tipo_ticket' => $request['tipo_ticket'],
        //         // 'premio' => $request['premio'],
        //         // 'origen' => $request['origen'],
        //         // 'uso' => $request['uso']
                
        //     // ]);
        // }
        // dd($data);
        $data = [];
        for($i = 1; $i <= $request->get('number'); $i++){
            $data[] = [
                'codes' => $this->generateRandomString(6),
                'f_inicio' => $request->get('f_inicio'),
                'f_final' => $request->get('f_final'),
                'tipo_ticket' => $request->get('tipo_ticket'),
                'cantidad' => $request->get('cantidad'),
                'origen' => $request->get('origen'),
                'uso' => $request->get('uso'),
            ];
        }
        
        Code::upsert($data, [
            'codes', 'f_inicio', 'f_final', 'tipo_ticket', 'cantidad', 'origen', 'uso',
        ]);

// dd('queda', Code::all()->toArray());

        //dd($data);
        //   Code::upsert($data, [
        //     'codes', 'f_inicio', 'f_final', 'tipo_ticket', 'cantidad', 'origen', 'uso'
        // ]);
        //Code::create($data);
        //   $notification = "El acertijo se creo correctamente";
        //   return redirect('/codes')->with(compact('notification'));
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
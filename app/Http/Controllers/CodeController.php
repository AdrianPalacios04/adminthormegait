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
        
       // $text = empty($this->get('codes'));
        
        $data = [];
        for($i = 1; $i <= $request->get('number'); $i++){
            
                $data[] = [
                    'codes' => empty($request->get('codes')) ? $this->generateRandomString(6) : $request->get('codes'),
                    // https://www.neoguias.com/if-abreviado-en-php-el-operador-ternario/
                   'f_inicio' => $request->get('f_inicio'),
                   'f_final' => $request->get('f_final'),
                   'tipo_ticket' => $request->get('tipo_ticket'),
                   'cantidad' => $request->get('cantidad'),
                   'origen' => $request->get('origen'),
                   'uso' => $request->get('uso'),
               ];
            }
        //  dd($data);
          Code::upsert($data, [
              'codes', 'f_inicio', 'f_final', 'tipo_ticket', 'cantidad', 'origen', 'uso',
         ]);
         $notification = "El Codigos se creo correctamente";
         return redirect('/codes')->with(compact('notification'));
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
    public function edit($id)
    {
        $code = Code::findOrFail($id);
        return view('codes.edit',compact('code'));
    }
    public function update(Request $request,$id)
    {
        $code = Code::findOrFail($id);
        $code->f_inicio = $request->input('f_inicio');
        $code->f_final = $request->input('f_final');
        $code->tipo_ticket = $request->input('tipo_ticket');
        $code->cantidad = $request->input('cantidad');
        $code->origen = $request->input('origen');
        $code->uso = $request->input('uso');
        $code->save();//UPDATE
        $notification = 'El codigo de promoción actualizado correctamente';
         return redirect('/codes')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $code = Code::findOrFail($id);
        $code->delete();
        $notification = "El acertijo se ha eliminado correctamente";
        return redirect('/codes')->with(compact('notification'));
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
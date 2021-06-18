<?php

namespace App\Http\Controllers;

use App\Models\Publicidad;
use Illuminate\Http\Request;
use file;


class PublicidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicidad = Publicidad::all();
        return view('publicidad.index',compact('publicidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publicidad = new Publicidad();

        $publicidad->nombre = $request->input('nombre');
        $publicidad->link = $request->input('link');
        $publicidad->f_inicio = $request->input('f_inicio');
        $publicidad->f_final = $request->input('f_final');
        $publicidad->posicion = $request->input('posicion');
        $publicidad->opciones = $request->input('opciones');
        


         if ($request->hasfile('imagen')) {
            $request->hasfile('imagen');
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('imagen/publicidad/',$filename);
            $publicidad->imagen = $filename;
            
         }else {
            return $request;
            $publicidad->imagen = '';
        }
        //dd($publicidad);
         $publicidad->save();
         $notificacion = "Se agrego la publicidad correctamente";

         return redirect('/publicidad')->with(compact('notificacion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function show(Publicidad $publicidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $publicidad = Publicidad::find($id);
        return view('publicidad.edit',compact('publicidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $publicidad = Publicidad::find($id);
        $publicidad->nombre = $request->input('nombre');
        $publicidad->zona = $request->input('zona');
        $publicidad->f_inicio = $request->input('f_inicio');
        $publicidad->f_final = $request->input('f_final');


        

        if ($request -> hasfile('horizontal')) {

            $file = $request->file('horizontal');            
            $extension = $file->getClientOriginalExtension(); // nombre de la imagen
            $filename = time().'.'.$extension;
            $file -> move('imagen/publicidad/',$filename);
            $publicidad->horizontal = $filename;
        }elseif ($request->hasfile('vertical')) {
            $file1 = $request->file('vertical');
            $extension1 = $file1->getClientOriginalExtension();
            $filename1 = time().'.'.$extension1;
            $file1->move('imagen/publicidad/',$filename1);
            $publicidad->vertical = $filename1;
        }
        $publicidad->save();//UPDATE
        $notificacion = 'Se edito la publicidad se ha actualizado correctamente';
         return redirect('/publicidad')->with(compact('notificacion'));
    }

    public function destroy(Publicidad $publicidad)
    {
        $publicidad->delete();
        $notificacion = "El acertijo se ha eliminado correctamente";
        return redirect('/publicidad')->with(compact('notificacion'));
    }
}
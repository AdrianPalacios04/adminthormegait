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
        $input = $request->all();
        if ($request -> hasFile('horizontal') and $request -> hasFile('vertical')) {
            $destination_path = 'public/imagen/publicidad';
            $image = $request->file('horizontal');
            $image1 = $request->file('vertical');
            $image_name = $image->getClientOriginalName(); // nombre de la imagen
            $image_name1 = $image1->getClientOriginalName(); // nombre de la imagen
            $path = $request->file('horizontal')->storeAs($destination_path,$image_name);
            $path1 = $request->file('vertical')->storeAs($destination_path,$image_name1);

            $input['horizontal'] = $image_name;
            $input['vertical'] = $image_name1;
        }
        Publicidad::create($input);
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
    public function edit(Publicidad $publicidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicidad $publicidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicidad $publicidad)
    {
        //
    }
}
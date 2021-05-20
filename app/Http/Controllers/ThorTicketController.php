<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThorTicket;

class ThorTicketController extends Controller
{
    public function index()
    {
        $thorticket = ThorTicket::paginate(8);

        // dd($thorticket);
        return view('thorticket.index',compact('thorticket'));
    }
    public function create()
    {
        return view('thorticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //mass assigment: asignacion masiva
        ThorTicket::create($request->all());
        $notificacion = 'El nuevo usuario se ha registrado correctamente';
        return redirect('/ticket')->with(compact('notificacion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thorticket = ThorTicket::findOrFail($id);
        return view('thorticket.edit',compact('thorticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $thorticket = ThorTicket::findOrFail($id);
        $data = $request->only("t_nombre","t_pregunta1","t_respuesta1","t_pregunta2","t_respuesta2",
        "t_pregunta3","t_respuesta3","t_llave1","t_llave2","t_llave3","pistas_Ax");
        
        $thorticket->fill($data);
        $thorticket->save();//UPDATE
        $notification = 'Se edito el acertijo se ha actualizado correctamente';
        return redirect('/ticket')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThorTicket $thorticket,$id)
    {
        $thorticket = ThorTicket::findOrFail($id);
        $thorticket->delete();
        $notification = "El acertijo se ha eliminado correctamente";
        
        return redirect('/ticket')->with(compact('notification'));
    }
    public function changeUse(Request $request)
    {
        $thorticket = ThorTicket::find($request->i_id);
        $thorticket -> i_uso = $request->i_uso;
        //dd($acertijo);
        $thorticket->save();
        return response()->json(['success' => 'Uso Activo']);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Reclamo;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;    
use App\Mail\ReclamoMail;

class ReclamoController extends Controller
{
  
    public function index()
    {
        // $reclamo = Reclamo::with('clients')->get();
        $reclamo = Reclamo::all();
        return view('reclamo.index',compact('reclamo'));
    }
    public function store(Request $request)
    {

        // // $correoFind = Reclamo::findOrFail($id);
        // $correo = new ReclamoMail($request->all());

        // $envio = Mail::to($request->get('email'))->send($correo);
    
        // return "Mensaje Enviado";
    }
    public function edit(Request $request, $id)
    {
        $reclamo = Reclamo::findOrFail($id);
        return view('reclamo.edit',compact('reclamo'));
    }
    public function Message(Request $request)
    {
        // forma sincrona es el envio 
        $correo = new ReclamoMail($request->all());

        $envio = Mail::to($request->get('email'))->send($correo);

        

        $notificacion = "Se envio el correo correctamente";
    
        return redirect('/reclamo')->with(compact('notificacion'));
    }
}
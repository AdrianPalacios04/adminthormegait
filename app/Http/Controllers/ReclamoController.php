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
        return view('reclamo.message',compact('reclamo'));
    }
    public function Message(Request $request) //  este es cierto ? si 
    {   
        dd($request->all());
        $correo = new ReclamoMail($request->get('respuesta'), $request->get('reclamo_id'));
// por ejemplo aqui como segundo parametro puedes pasar el codigo de la reclamacion
        $envio = Mail::to($request->get('email'))->send($correo);
        // $model->status = !$model->status;
// guasat olvide grabar el controller xD

        $notificacion = "Se envio el correo correctamente";
    
        return redirect('/reclamo')->with(compact('notificacion'));
    }
    public function GetMessage($id)
    {
        $find = Reclamo::findOrFail($id);
        return view('reclamo.message',compact('find'));
    }
}
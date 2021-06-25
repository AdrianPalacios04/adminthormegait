<?php

namespace App\Http\Controllers;

use App\Models\Reclamo;
use Illuminate\Http\Request;
use App\Models\Client;
use Iluminate\Support\Facades\Mail;
use App\Mail\ReclamoMail;

class ReclamoController extends Controller
{
  
    public function index()
    {
        // $reclamo = Reclamo::with('clients')->get();
        $reclamo = Reclamo::all();
        return view('reclamo.index',compact('reclamo'));
    }
    public function send(Request $request)
    {
        $reclamo = array (
            'respuesta' => $request->respuesta
        );
        $email = $request->input('email');

        Mail::to('Receiver Email Address')->send(new ReclamoMail($reclamo));

        return back()->with('success','Envio Exitoso');
    }
}
<?php

namespace App\Mail;

use App\Models\Reclamo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReclamoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $respuesta;
    public $reclamoId;
   
    public function __construct($respuesta, $reclamoId)
    {
        $this->respuesta = $respuesta;
        $this->reclamoId = $reclamoId;
        
    }

    public function build()
    {
        return $this->view('reclamo.message')->with([
            'respuesta'=> $this->respuesta,
            'reclamoId'=> $this->reclamoId, // claro esta que aqui le puedes pasar el nombre que tu quieras
        ]);
    }
}
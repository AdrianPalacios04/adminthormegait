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

    public $reclamo;
   
    public function __construct($reclamo)
    {
        $this->reclamo = $reclamo;
        
    }

    public function build()
    {
        return $this->view('reclamo.message');
    }
}
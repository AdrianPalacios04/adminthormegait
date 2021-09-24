<?php

namespace App\Exports;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

use App\Models\UserCarrera;

class GanadoresExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Usercarrera::with(['clients.persona','carreratotal.ticket','carreratotal.paga'
        ,'carreratotal.oldticket'])->get();
    }
    public function map($item) : array 
    {
        if ($item->carreratotal->id_px == 1) {
            $team = $item->carreratotal->ticket->t_nombre;
        }elseif($item->carreratotal->paga != null){
           $team =  $item->carreratotal->paga->t_nombre;
        }elseif($item->carreratotal->paga == null){
            $team = $item->carreratotal->oldticket->t_nombre;
        }else{
            $team = 'No se encontro';
        }
        // para las relaciones
        return  [
            Carbon::parse($item->inicio)->toFormattedDateString(),
            Carbon::parse($item->inicio)->toTimeString(),
            $item->clients->t_username,
            $item->clients->persona->c_dniper,
            $item->clients->n_celular,
           $team 
        
        ];
    }
    public function headings(): array 
    {
        return [
            'Fecha',
            'Hora',
            'Nombre',
            'DNI',
            'Carreras'
        ];
    }
}
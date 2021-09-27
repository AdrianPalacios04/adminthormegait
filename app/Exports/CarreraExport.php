<?php

namespace App\Exports;

use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use App\Models\CarreraTotal;

class CarreraExport implements FromCollection,WithMapping, WithHeadings, WithColumnWidths,WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CarreraTotal::with(['ticket','oldticket','paga','usercarrera','premio'])
        ->get();
    }

    public function map($item) : array
    {
        if ($item->id_px == 1) {
            $team = $item->ticket->t_nombre;
        }elseif($item->paga !=null){
            $team = $item->paga->t_nombre;
        }elseif($item->paga == null){
            $team = $item->oldticket->t_nombre;
        }else{
            'No se encontro';
        }
        return [
            Carbon::parse($item->inicio)->toFormattedDateString(),
            Carbon::parse($item->inicio)->toTimeString(),
            $team,
            $item->premio->tipo,
            $item->premio->id == 1 ? floatval($item->px_1). " ticket" : "S/. ". floatval($item->px_1),
            $item->usercarrera->count() == 0 ? 'Nadie se registro' : ($item->usercarrera->count() == 1 ? $item->usercarrera->count()." Jugador" : $item->usercarrera->count()." Jugadores"),
        ];
    }
    public function headings(): array
    {
        return [
            'Fecha',
            'Hora',
            'Carrera',
            'Tipo Premio',
            'Premio',
            'N° Jugadores'
        ];
    }
    public function columnWidths(): array
    {
        return [
            'A' => 12,
            'B' => 10,
            'C' => 20,
            'D' => 20,
            'F' => 18   
        ];
    }
    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
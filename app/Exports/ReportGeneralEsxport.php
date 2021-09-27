<?php

namespace App\Exports;

// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;

class ReportGeneralEsxport implements WithMultipleSheets
{
    // use WithConditionalSheets;
    public function sheets(): array
    {

        $sheets = [];
        array_push($sheets, new CarreraExport());
        array_push($sheets, new GanadoresExport());
        return $sheets;
    }
}
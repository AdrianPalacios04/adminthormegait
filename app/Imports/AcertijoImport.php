<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\Acertijo;
// use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class AcertijoImport implements ToModel {
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Acertijo([
           't_pregunta'  => $row[0],
           't_respuesta' => $row[1], 
           't_pista' => $row[2],
           't_kword1' => $row[3],
           't_kword2' => $row[4],
           't_kword3' => $row[5],
           'user_id' => $row[6],
           'i_uso' => $row[7],
           'b_estado'=>$row[8],
           'answered' => $row[9]
        ]);
    }
}
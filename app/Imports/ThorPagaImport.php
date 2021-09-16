<?php

namespace App\Imports;

use App\Models\ThorPaga;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ThorPagaImport implements ToModel, WithHeadingRow, WithValidation
{
    private $numRows = 0;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        ++$this->numRows;
        return new ThorPaga([
            "t_nombre" => $row['t_nombre'],
            "t_pregunta1" => $row["t_pregunta1"],
            "t_respuesta1" => $row["t_respuesta1"],
            "t_pregunta2" => $row["t_pregunta2"],
            "t_respuesta2" => $row["t_respuesta2"],
            "t_pregunta3" => $row["t_pregunta3"],
            "t_respuesta3" => $row["t_respuesta3"],
            "t_llave1" => $row["t_llave1"],
            "t_llave2" => $row["t_llave2"],
            "t_llave3" => $row["t_llave3"],
            "pistas" => $row["pistas"],
            "user_id" => $row["user_id"],
        ]);
    }
    public function rules():array
    {
          return [   
            "t_nombre" => "required",
            "t_pregunta1" =>"required",
            "t_respuesta1" =>"required",
            "t_pregunta2" => "required",
            "t_respuesta2" =>"required",
            "t_pregunta3" => "required",
            "t_respuesta3" => "required",
            "t_llave1" => "required",
            "t_llave2" => "required",
            "t_llave3" => "required",
            "pistas" => "required",
            "user_id" =>  "required", 
          ];
    }
    public function getRowCount():int
    {
        return $this->numRows;
    }
}
<?php

namespace App\Imports;

use App\Models\Sedes;
use Maatwebsite\Excel\Concerns\ToModel;

class SedesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sedes([
            'consecutivo' => $row[0],
            'nombre' => $row[1],
            'calendario' => $row[2],
            'zona' => $row[3],
            'modelo' => $row[4],
            'codigo_dane_institucion' => $row[5],
        ]);
    }
}

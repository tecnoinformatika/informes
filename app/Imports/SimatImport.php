<?php

namespace App\Imports;

use App\Models\Simat;
use Maatwebsite\Excel\Concerns\ToModel;

class SimatImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Simat([
            'ano' => $row[0],
            'etc' => $row[1],
            'estado' => $row[2],
            'jerarquia' => $row[3],
            'institucion' => $row[4],
            'dane' => $row[5],
            'calendario' => $row[6],
            'sector' => $row[7],
            'sede' => $row[8],
            'codigo_dane_sede' => $row[9],
            'consecutivo' => $row[10],
            'zona_sede' => $row[11],
            'jornada' => $row[12],
            'grado_cod' => $row[13],
            'grupo' => $row[14],
            'modelo' => $row[15],
            'motivo' => $row[16],
            'fechaini' => $row[17],
            'fechafin' => $row[18],
            'nui' => $row[19],
            'estrato' => $row[20],
            'sisben_iv' => $row[21],
            'per_id' => $row[22],
            'doc' => $row[23],
            'tioodoc' => $row[24],
            'apellido1' => $row[25],
            'apellido2' => $row[26],
            'nombre1' => $row[27],
            'nombre2' => $row[28],
            'genero' => $row[29],
            'fecha_nacimiento' => $row[30],
            'barrio' => $row[31],
            'eps' => $row[32],
            'tipo_de_sangre' => $row[33],
            'matriculacontratada' => $row[34],
            'fuente_recursos' => $row[35],
            'internado' => $row[36],
            'num_contratado' => $row[37],
            'apoyo_academico_especial' => $row[38],
            'srpa' => $row[39],
            'discapacidad' => $row[40],
            'pais_origen' => $row[41],
            'correo' => $row[42],
        ]);
    }

    public function chunkSize(): int
    {
        return 500;
    }
}

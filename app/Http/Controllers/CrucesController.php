<?php

namespace App\Http\Controllers;

use App\Models\Rps;
use App\Models\Ri;
use App\Models\Simat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrucesController extends Controller
{
    public function estadoMatriculaJson(){
        $rps = DB::table('rps')
                    ->join('simats','rps.documento','=','simats.documento')
                    ->select('rps.id as N',
                             'rps.TIPO_DE_DOCUMENTO as tipodoc',
                             'rps.NUMERO_DE_DOCUMENTO_DE_IDENTIDAD as numdoc',
                             'rps.PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO as PrimerNombre',
                             'rps.SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO as SegundoNombre',
                             'rps.PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO as PrimerApellido',
                             'rps.SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO as SegundoApellido',
                             'rps.FECHA_DE_NACIMIENTO as fechaNacimiento',
                             'rps.Sexo as sexo',
                             'rps.Tipo_de_complemento as tipoComplemento',
                             'simats.institucion as institucion',
                             'simats.sede as sede',
                             'simats.estado as estado')
                    ->get();
        //$ri = DB::table('rps')
                //->Join('ris','ris.documento','!=','rps.documento')
                //->get();
        
        // $combinado = 
        return json_decode($rps);
    }

    public function estadoMatricula(){
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Estado de matrícula"], ['name' => "Cruces"]];
        return view('/content/cruces/estadodematricula', ['breadcrumbs' => $breadcrumbs]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Rps;
use App\Models\Ri;
use App\Models\Simat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class CrucesController extends Controller
{
    public function estadoMatriculaJson(Request $request){
        $institucion = $request->institucion;
        $tipo = $request->tipo;
       
        if($tipo == 'RPS'){
            $data = DB::table('rps')
                    ->LeftJoin('simats','rps.documento','=','simats.documento')
                    ->where('rps.codigo_dane_sede','=', $institucion)
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
                    ->groupByRaw('N,tipodoc,numdoc,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,fechaNacimiento,sexo,tipoComplemento,institucion,sede,estado')                  
                    ->get();
                      
            $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Cruces"], ['name' => "Estado de matrícula"]];
            return view('/content/cruces/estadodematricula', ['breadcrumbs' => $breadcrumbs, 'data' => $data]);

        }
        if($tipo == 'RI'){
            $data = DB::table('ris')
                    ->leftJoin('rps','ris.documento','=','rps.documento')
                    ->leftjoin('simats','ris.documento','=','simats.documento')
                    ->where('ris.codigo_dane_sede','=', $institucion)
                    ->select('ris.id as N',
                             'ris.TIPO_DE_DOCUMENTO as tipodoc',
                             'ris.NUMERO_DE_DOCUMENTO_DE_IDENTIDAD as numdoc',
                             'ris.PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO as PrimerNombre',
                             'ris.SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO as SegundoNombre',
                             'ris.PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO as PrimerApellido',
                             'ris.SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO as SegundoApellido',
                             'ris.FECHA_DE_NACIMIENTO as fechaNacimiento',
                             'ris.Sexo as sexo',
                             'ris.Tipo_de_complemento as tipoComplemento',
                             'simats.institucion as institucion',
                             'simats.sede as sede',
                             'simats.estado as estado')
                    ->groupByRaw('N,tipodoc,numdoc,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,fechaNacimiento,sexo,tipoComplemento,institucion,sede,estado')                  
                    ->get();

            $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Cruces"], ['name' => "Estado de matrícula"]];
            return view('/content/cruces/estadodematricula', ['breadcrumbs' => $breadcrumbs, 'data' => $data]);
        }
        
    }
    public function registro($id,$tipo)
    {
        
       
        if($tipo == 'RPS'){
            $rps = Rps::find($id);      
            return Response::json($rps);
        }
        if($tipo == 'RI'){
            $ri = Ri::find($id);
            return Response::json($ri);
        }
            
    }

    public function registrosimat($id,$tipo)
    {
        $vacio = ['vacio' => 1];
        if($tipo == 'RPS'){
            $rps = Rps::find($id);      

            $simat = Simat::where('doc', $rps->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD)->first();
            if (isset($simat)){
                return Response::json($simat);
            }else{
                return Response::json($vacio);
            }
        }
        if($tipo == 'RI'){
            $ri = Ri::find($id);
            
            $simat = DB::table('simats')->where('doc', $ri->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD)->first();
            if (isset($simat)){
                return Response::json($simat);
            }else{
                return Response::json($vacio);
            }
            
        }
            
    }

    public function observacion(Request $request){
        
        $tipo = $request->tipo;
        $id = $request->id;
        if($tipo == "RPS"){
            $rps = Rps::find($id);
            
            $rps->observacionesMatricula = $request->observacion;
            $rps->save();

            return Response::json($rps);
        }
        if($tipo == "RI"){
            $ri = Ri::find($id);
           
            $ri->observacionesMatricula = $request->observacion;
            $ri->save();
            return Response::json($ri);
        }
        

    }

    public function estadoMatricula(){
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Estado de matrícula"], ['name' => "Cruces"]];
        return view('/content/cruces/estadodematricula', ['breadcrumbs' => $breadcrumbs]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Rps;
use App\Models\Ri;
use App\Models\Simat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Auth;
use App\Models\consolidado;

class CrucesController extends Controller
{

        public function __construct()
        {
                $this->middleware('auth');
        }
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
                                'rps.INSTITUCION as insti',
                                'rps.SEDE as sed',
                                'rps.Tipo_de_complemento as tipoComplemento',
                                'rps.Tipo_de_complemento as tipoComplemento',
                                'simats.institucion as institucion',
                                'simats.sede as sede',
                                'simats.estado as estado') 
                        ->groupByRaw('N,tipodoc,numdoc,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,fechaNacimiento,sexo,insti,sed,tipoComplemento,institucion,sede,estado')                  
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
                                'ris.INSTITUCION as insti',
                                'ris.SEDE as sed',
                                'ris.Tipo_de_complemento as tipoComplemento',
                                'simats.institucion as institucion',
                                'simats.sede as sede',
                                'simats.estado as estado')
                        ->groupByRaw('N,tipodoc,numdoc,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,fechaNacimiento,sexo,insti,sed,tipoComplemento,institucion,sede,estado')                  
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

        public function observacion(Request $request)
        {
                
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

        public function estadoMatricula()
        {
                $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Estado de matrícula"], ['name' => "Cruces"]];
                return view('/content/cruces/estadodematricula', ['breadcrumbs' => $breadcrumbs]);
        }

        public function indexConsolidado()
        {



                $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Consolidado"], ['name' => "Cruces"]];
                return view('/content/cruces/consolidadoIndex', ['breadcrumbs' => $breadcrumbs]);
        }

        public function consolidado(Request $request)
        {
                $array = [];
                foreach($request->sedes as $sede)
                {
                        $simat = Simat::where('consecutivo', $sede)->first();
                        $tipo = $request->tipo;
                        if($tipo == "RI"){
                                $dias = Ri::first();
                                $dia1 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_1 is null then 1 else 0 end) as dia_1, sum(case when dia_1 is not null then 1 else 0 end) as dia_1observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia2 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_2 is null then 1 else 0 end) as dia_2, sum(case when dia_2 is not null then 1 else 0 end) as dia_2observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia3 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_3 is null then 1 else 0 end) as dia_3, sum(case when dia_3 is not null then 1 else 0 end) as dia_3observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia4 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_4 is null then 1 else 0 end) as dia_4, sum(case when dia_4 is not null then 1 else 0 end) as dia_4observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia5 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_5 is null then 1 else 0 end) as dia_5, sum(case when dia_5 is not null then 1 else 0 end) as dia_5observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia6 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_6 is null then 1 else 0 end) as dia_6, sum(case when dia_6 is not null then 1 else 0 end) as dia_6observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia7 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_7 is null then 1 else 0 end) as dia_7, sum(case when dia_7 is not null then 1 else 0 end) as dia_7observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia8 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_8 is null then 1 else 0 end) as dia_8, sum(case when dia_8 is not null then 1 else 0 end) as dia_8observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia9 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_9 is null then 1 else 0 end) as dia_9, sum(case when dia_9 is not null then 1 else 0 end) as dia_9observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia10 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_10 is null then 1 else 0 end) as dia_10, sum(case when dia_10 is not null then 1 else 0 end) as dia_10observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia11 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_11 is null then 1 else 0 end) as dia_11, sum(case when dia_11 is not null then 1 else 0 end) as dia_11observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia12 = Ri::where('codigo_dane_sede', $sede)                       
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_12 is null then 1 else 0 end) as dia_12, sum(case when dia_12 is not null then 1 else 0 end) as dia_12observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia13 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_13 is null then 1 else 0 end) as dia_13, sum(case when dia_13 is not null then 1 else 0 end) as dia_13observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia14 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_14 is null then 1 else 0 end) as dia_14, sum(case when dia_14 is not null then 1 else 0 end) as dia_14observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia15 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_15 is null then 1 else 0 end) as dia_15, sum(case when dia_15 is not null then 1 else 0 end) as dia_15observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia16 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_16 is null then 1 else 0 end) as dia_16, sum(case when dia_16 is not null then 1 else 0 end) as dia_16observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia17 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_17 is null then 1 else 0 end) as dia_17, sum(case when dia_17 is not null then 1 else 0 end) as dia_17observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia18 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_18 is null then 1 else 0 end) as dia_18, sum(case when dia_18 is not null then 1 else 0 end) as dia_18observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia19 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_19 is null then 1 else 0 end) as dia_19, sum(case when dia_19 is not null then 1 else 0 end) as dia_19observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia20 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_20 is null then 1 else 0 end) as dia_20, sum(case when dia_20 is not null then 1 else 0 end) as dia_20observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia21 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_21 is null then 1 else 0 end) as dia_21, sum(case when dia_21 is not null then 1 else 0 end) as dia_21observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia22 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_22 is null then 1 else 0 end) as dia_22, sum(case when dia_22 is not null then 1 else 0 end) as dia_22observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia23 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_23 is null then 1 else 0 end) as dia_23, sum(case when dia_23 is not null then 1 else 0 end) as dia_23observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia24 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_24 is null then 1 else 0 end) as dia_24, sum(case when dia_24 is not null then 1 else 0 end) as dia_24observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia25 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_25 is null then 1 else 0 end) as dia_25, sum(case when dia_25 is not null then 1 else 0 end) as dia_25observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia26 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_26 is null then 1 else 0 end) as dia_26, sum(case when dia_26 is not null then 1 else 0 end) as dia_26observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia27 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_27 is null then 1 else 0 end) as dia_27, sum(case when dia_27 is not null then 1 else 0 end) as dia_27observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia28 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_28 is null then 1 else 0 end) as dia_28, sum(case when dia_28 is not null then 1 else 0 end) as dia_28observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia29 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_29 is null then 1 else 0 end) as dia_29, sum(case when dia_29 is not null then 1 else 0 end) as dia_29observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia30 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_30 is null then 1 else 0 end) as dia_30, sum(case when dia_30 is not null then 1 else 0 end) as dia_30observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia31 = Ri::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_31 is null then 1 else 0 end) as dia_31, sum(case when dia_31 is not null then 1 else 0 end) as dia_31observacion, Tipo_de_complemento'))
                                        ->get();
                                $data = [];
                                $data['simat'] = $simat;
                                $data['simat']['dia1'] = $dia1;
                                $data['simat']['dia2'] = $dia2;
                                $data['simat']['dia3'] = $dia3;
                                $data['simat']['dia4'] = $dia4;
                                $data['simat']['dia5'] = $dia5;
                                $data['simat']['dia6'] = $dia6;
                                $data['simat']['dia7'] = $dia7;
                                $data['simat']['dia8'] = $dia8;
                                $data['simat']['dia9'] = $dia9;
                                $data['simat']['dia10'] = $dia10;
                                $data['simat']['dia11'] = $dia11;
                                $data['simat']['dia12'] = $dia12;
                                $data['simat']['dia13'] = $dia13;
                                $data['simat']['dia14'] = $dia14;
                                $data['simat']['dia15'] = $dia15;
                                $data['simat']['dia16'] = $dia16;
                                $data['simat']['dia17'] = $dia17;
                                $data['simat']['dia18'] = $dia18;
                                $data['simat']['dia19'] = $dia19;
                                $data['simat']['dia20'] = $dia20;
                                $data['simat']['dia21'] = $dia21;
                                $data['simat']['dia22'] = $dia22;
                                $data['simat']['dia23'] = $dia23;
                                $data['simat']['dia24'] = $dia24;
                                $data['simat']['dia25'] = $dia25;
                                $data['simat']['dia26'] = $dia26;
                                $data['simat']['dia27'] = $dia27;
                                $data['simat']['dia28'] = $dia28;
                                $data['simat']['dia29'] = $dia29;
                                $data['simat']['dia30'] = $dia30;
                                $data['simat']['dia31'] = $dia31;
                                
                                array_push($array, $data);
                        }
                        if($tipo == "RPS"){
                                $dias = Rps::first();
                                $dia1 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_1 is null then 1 else 0 end) as dia_1, sum(case when dia_1 is not null then 1 else 0 end) as dia_1observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia2 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_2 is null then 1 else 0 end) as dia_2, sum(case when dia_2 is not null then 1 else 0 end) as dia_2observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia3 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_3 is null then 1 else 0 end) as dia_3, sum(case when dia_3 is not null then 1 else 0 end) as dia_3observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia4 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_4 is null then 1 else 0 end) as dia_4, sum(case when dia_4 is not null then 1 else 0 end) as dia_4observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia5 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_5 is null then 1 else 0 end) as dia_5, sum(case when dia_5 is not null then 1 else 0 end) as dia_5observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia6 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_6 is null then 1 else 0 end) as dia_6, sum(case when dia_6 is not null then 1 else 0 end) as dia_6observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia7 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_7 is null then 1 else 0 end) as dia_7, sum(case when dia_7 is not null then 1 else 0 end) as dia_7observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia8 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_8 is null then 1 else 0 end) as dia_8, sum(case when dia_8 is not null then 1 else 0 end) as dia_8observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia9 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_9 is null then 1 else 0 end) as dia_9, sum(case when dia_9 is not null then 1 else 0 end) as dia_9observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia10 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_10 is null then 1 else 0 end) as dia_10, sum(case when dia_10 is not null then 1 else 0 end) as dia_10observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia11 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_11 is null then 1 else 0 end) as dia_11, sum(case when dia_11 is not null then 1 else 0 end) as dia_11observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia12 = Rps::where('codigo_dane_sede', $sede)                       
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_12 is null then 1 else 0 end) as dia_12, sum(case when dia_12 is not null then 1 else 0 end) as dia_12observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia13 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_13 is null then 1 else 0 end) as dia_13, sum(case when dia_13 is not null then 1 else 0 end) as dia_13observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia14 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_14 is null then 1 else 0 end) as dia_14, sum(case when dia_14 is not null then 1 else 0 end) as dia_14observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia15 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_15 is null then 1 else 0 end) as dia_15, sum(case when dia_15 is not null then 1 else 0 end) as dia_15observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia16 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_16 is null then 1 else 0 end) as dia_16, sum(case when dia_16 is not null then 1 else 0 end) as dia_16observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia17 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_17 is null then 1 else 0 end) as dia_17, sum(case when dia_17 is not null then 1 else 0 end) as dia_17observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia18 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_18 is null then 1 else 0 end) as dia_18, sum(case when dia_18 is not null then 1 else 0 end) as dia_18observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia19 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_19 is null then 1 else 0 end) as dia_19, sum(case when dia_19 is not null then 1 else 0 end) as dia_19observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia20 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_20 is null then 1 else 0 end) as dia_20, sum(case when dia_20 is not null then 1 else 0 end) as dia_20observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia21 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_21 is null then 1 else 0 end) as dia_21, sum(case when dia_21 is not null then 1 else 0 end) as dia_21observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia22 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_22 is null then 1 else 0 end) as dia_22, sum(case when dia_22 is not null then 1 else 0 end) as dia_22observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia23 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_23 is null then 1 else 0 end) as dia_23, sum(case when dia_23 is not null then 1 else 0 end) as dia_23observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia24 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_24 is null then 1 else 0 end) as dia_24, sum(case when dia_24 is not null then 1 else 0 end) as dia_24observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia25 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_25 is null then 1 else 0 end) as dia_25, sum(case when dia_25 is not null then 1 else 0 end) as dia_25observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia26 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_26 is null then 1 else 0 end) as dia_26, sum(case when dia_26 is not null then 1 else 0 end) as dia_26observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia27 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_27 is null then 1 else 0 end) as dia_27, sum(case when dia_27 is not null then 1 else 0 end) as dia_27observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia28 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_28 is null then 1 else 0 end) as dia_28, sum(case when dia_28 is not null then 1 else 0 end) as dia_28observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia29 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_29 is null then 1 else 0 end) as dia_29, sum(case when dia_29 is not null then 1 else 0 end) as dia_29observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia30 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_30 is null then 1 else 0 end) as dia_30, sum(case when dia_30 is not null then 1 else 0 end) as dia_30observacion, Tipo_de_complemento'))
                                        ->get();
                                $dia31 = Rps::where('codigo_dane_sede', $sede)
                                        ->groupByRaw('Tipo_de_complemento')
                                        ->select(DB::raw('sum(case when dia_31 is null then 1 else 0 end) as dia_31, sum(case when dia_31 is not null then 1 else 0 end) as dia_31observacion, Tipo_de_complemento'))
                                        ->get();
                                $data = [];
                                $data['simat'] = $simat;
                                $data['simat']['dia1'] = $dia1;
                                $data['simat']['dia2'] = $dia2;
                                $data['simat']['dia3'] = $dia3;
                                $data['simat']['dia4'] = $dia4;
                                $data['simat']['dia5'] = $dia5;
                                $data['simat']['dia6'] = $dia6;
                                $data['simat']['dia7'] = $dia7;
                                $data['simat']['dia8'] = $dia8;
                                $data['simat']['dia9'] = $dia9;
                                $data['simat']['dia10'] = $dia10;
                                $data['simat']['dia11'] = $dia11;
                                $data['simat']['dia12'] = $dia12;
                                $data['simat']['dia13'] = $dia13;
                                $data['simat']['dia14'] = $dia14;
                                $data['simat']['dia15'] = $dia15;
                                $data['simat']['dia16'] = $dia16;
                                $data['simat']['dia17'] = $dia17;
                                $data['simat']['dia18'] = $dia18;
                                $data['simat']['dia19'] = $dia19;
                                $data['simat']['dia20'] = $dia20;
                                $data['simat']['dia21'] = $dia21;
                                $data['simat']['dia22'] = $dia22;
                                $data['simat']['dia23'] = $dia23;
                                $data['simat']['dia24'] = $dia24;
                                $data['simat']['dia25'] = $dia25;
                                $data['simat']['dia26'] = $dia26;
                                $data['simat']['dia27'] = $dia27;
                                $data['simat']['dia28'] = $dia28;
                                $data['simat']['dia29'] = $dia29;
                                $data['simat']['dia30'] = $dia30;
                                $data['simat']['dia31'] = $dia31;
                                
                                array_push($array, $data);
                        }
                
                }

                //return response::json($array);
                
                $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Consolidado"], ['name' => "Cruces"]];
                return view('/content/cruces/consolidado', ['breadcrumbs' => $breadcrumbs, 'data' => $array, 'dias' => $dias]);
        
        }

        public function updateConsolidado(Request $request)
        {
                $id = Auth::user()->id;
                
                $dia = $request->dia;

               
                
                if(Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->first())
                {
                        if(isset($request->diasAtendidos)){
                                Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,
                                        'N_dias_atendidos' => $request->diasAtendidos
                                ]);
                                     
                        }else if(isset($request->totalRaciones))
                        {
                                Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,                                        
                                        'total_raciones' => $request->totalRaciones
                                ]);     
                        }else if (isset($request->novedades))
                        {
                                Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,                                        
                                        'novedades' => $request->novedades
                                ]);    
                        }else if (isset($request->devoluciones))
                        {
                                Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,                                        
                                        'devoluciones' =>$request->devoluciones
                                ]);     
                        }else{
                                Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                        $dia => $request->value
                                ]);
                        }
                        
                        
                        return response()->json(['success' => true]);
                        
                }else{
                            
                        if(isset($dia) )
                        {
                                Consolidado::insert([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,
                                         'N_dias_atendidos' => $request->diasAtendidos,
                                        'total_raciones' => $request->totalRaciones,
                                        'novedades' => $request->novedades,
                                        'devoluciones' =>$request->devoluciones
                                    ]); 
                        }else{
                                Consolidado::insert([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,                                        
                                        'N_dias_atendidos' => $request->diasAtendidos,
                                        'total_raciones' => $request->totalRaciones,
                                        'novedades' => $request->novedades,
                                        'devoluciones' =>$request->devoluciones
                                    ]); 
                        }
                        

                        return response()->json(['success' => true]);
                }
                
        }
}

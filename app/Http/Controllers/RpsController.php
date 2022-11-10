<?php

namespace App\Http\Controllers;

use App\Models\Rps;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RpsImport;

class RpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rps = Rps::get();  
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del RPS"], ['name' => "RPS"]];
        return view('/content/rps/rps', ['breadcrumbs' => $breadcrumbs, 'data' => $rps]);
    
    }

    public function tablaRps()
    {
        $rps = Rps::skip(0)->take(5)->get();  
        
        return \Response::json($rps);
    }
    public function Datos()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del RPS"], ['name' => "Administrar datos"]];
        return view('/content/rps/datos', ['breadcrumbs' => $breadcrumbs]);
    }
    public function importar(Request $request)
    {
        
        if( isset($request["excelrps"])){
            Excel::import(new RpsImport, request()->file('excelrps'));
            $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del Rps"], ['name' => "Rps"]];
            return view('/content/rps/rps', ['breadcrumbs' => $breadcrumbs]);
        }
        
        
        
        return redirect('/')->with('success', 'All good!');
    }

    public function vaciar()
    {
        
        Rps::query()->truncate();

        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del Rps"], ['name' => "Rps"]];
        return view('/content/rps/rps', ['breadcrumbs' => $breadcrumbs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function show(Rps $rps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function edit(Rps $rps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rps $rps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rps $rps)
    {
        //
    }
}

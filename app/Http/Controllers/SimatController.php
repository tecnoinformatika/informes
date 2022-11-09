<?php

namespace App\Http\Controllers;

use App\Models\Simat;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SimatImport;

class SimatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del simat"], ['name' => "Simat"]];
        return view('/content/simat/simat', ['breadcrumbs' => $breadcrumbs]);
    
    }

    public function tablaSimat()
    {
        $simat = Simat::get();  
        
        return json_decode($simat);
    }
    public function Datos()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del simat"], ['name' => "Administrar datos"]];
        return view('/content/simat/datos', ['breadcrumbs' => $breadcrumbs]);
    }
    public function importar(Request $request)
    {
        
        if( isset($request["excelsimat"])){
            Excel::import(new SimatImport, request()->file('excelsimat'));
           dd("exito");
        }
        
        
        
        return redirect('/')->with('success', 'All good!');
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
     * @param  \App\Models\Simat  $simat
     * @return \Illuminate\Http\Response
     */
    public function show(Simat $simat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Simat  $simat
     * @return \Illuminate\Http\Response
     */
    public function edit(Simat $simat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Simat  $simat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Simat $simat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Simat  $simat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Simat $simat)
    {
        //
    }
}

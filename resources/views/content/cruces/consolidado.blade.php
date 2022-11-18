
@extends('layouts/contentLayoutMaster')

@section('title', 'Cruces PAE')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/1.0.1/pure-min.css">
  
@endsection
 
@section('content')
<div class="row">
  <div class="col-12">
    
  </div>
</div>
<!-- Basic table -->

<section id="complex-header-datatable">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header border-bottom">
            <h4 class="card-title"> {{$data[0]['simat']->institucion}}</h4>
          </div>
            @php 
                $diashabiles = 0;             
            
                
            
                if($dias->dia_1 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_2 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_3 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_4 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_5 != 'Z')
                {
                    $diashabiles += 1;
                }                
                if($dias->dia_6 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_7 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_8 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_9 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_10 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_11 != 'Z')
                {
                    $diashabiles += 1;
                }

                if($dias->dia_12 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_13 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_14 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_15 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_16 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_17 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_18 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_19 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_20 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_21 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_22 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_23 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_24 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_25 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_26 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_27 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_28 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_29 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_30 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_31 != 'Z')
                {
                    $diashabiles += 1;
                }


                
                
            @endphp
         
         
          <div class="card-datatable">
            <table id="editable" class="dt-complex-header table table-bordered table-responsive table-sm table-dark table-striped">
              <thead>
                <tr>
                  <th rowspan="2">SEDE</th>
                  <th rowspan="2">JORNADA - TIPO DE RACION</th>
                  <th colspan="{{$diashabiles}}">DIAS PROGRAMADOS</th>
                  <th rowspan="2">N° DIAS ATENDIDOS</th>
                  <th rowspan="2">TOTAL RACIONES</th>
                  <th rowspan="2">NOVEDADES EN LAS ENTREGAS</th>
                  <th rowspan="2">DEVOLUCIONES</th>
                  <th rowspan="2">Action</th>
                </tr>
                <tr>
                  <th style="display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};">1</th>
                  <th style="display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};">2</th>
                  <th style="display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};">3</th>
                  <th style="display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};">4</th>
                  <th style="display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};">5</th>
                  <th style="display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};">6</th>
                  <th style="display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};">7</th>
                  <th style="display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};">8</th>
                  <th style="display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};">9</th>
                  <th style="display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};">10</th>
                  <th style="display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};">11</th>
                  <th style="display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};">12</th>
                  <th style="display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};">13</th>
                  <th style="display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};">14</th>
                  <th style="display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};">15</th>
                  <th style="display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};">16</th>
                  <th style="display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};">17</th>
                  <th style="display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};">18</th>
                  <th style="display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};">19</th>
                  <th style="display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};">20</th>
                  <th style="display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};">21</th>
                  <th style="display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};">22</th>
                  <th style="display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};">23</th>
                  <th style="display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};">24</th>
                  <th style="display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};">25</th>
                  <th style="display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};">26</th>
                  <th style="display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};">27</th>
                  <th style="display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};">28</th>
                  <th style="display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};">29</th>
                  <th style="display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};">30</th>
                  <th style="display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};">31</th>
                </tr>
              </thead>
              <tbody>
                
               
               
                
                    
                    @foreach($data as $datos)
                  
                    <tr>                       
                        <td class="uneditable tg-lboi" rowspan="2">{{$datos['simat']->sede}}</td>
                        <td class="uneditable tg-0pky">JM-RI</td>
                        <td style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia1" data-modalidad="JM-RI">{{$datos['simat']->dia1->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia1'][0]->dia_1 != 0 ? $datos['simat']['dia1'][0]->dia_1 +  $datos['simat']['dia1'][0]->dia_1observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia2" data-modalidad="JM-RI">{{$datos['simat']->dia2->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia2'][0]->dia_2 != 0 ? $datos['simat']['dia2'][0]->dia_2 +  $datos['simat']['dia2'][0]->dia_2observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia3" data-modalidad="JM-RI">{{$datos['simat']->dia3->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia3'][0]->dia_3 != 0 ? $datos['simat']['dia3'][0]->dia_3 +  $datos['simat']['dia3'][0]->dia_3observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia4" data-modalidad="JM-RI">{{$datos['simat']->dia4->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia4'][0]->dia_4 != 0 ? $datos['simat']['dia4'][0]->dia_4 +  $datos['simat']['dia4'][0]->dia_4observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia5" data-modalidad="JM-RI">{{$datos['simat']->dia5->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia5'][0]->dia_5 != 0 ? $datos['simat']['dia5'][0]->dia_5 +  $datos['simat']['dia5'][0]->dia_5observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia6" data-modalidad="JM-RI">{{$datos['simat']->dia6->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia6'][0]->dia_6 != 0 ? $datos['simat']['dia6'][0]->dia_6 +  $datos['simat']['dia6'][0]->dia_6observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia7" data-modalidad="JM-RI">{{$datos['simat']->dia7->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia7'][0]->dia_7 != 0 ? $datos['simat']['dia7'][0]->dia_7 +  $datos['simat']['dia7'][0]->dia_7observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia8" data-modalidad="JM-RI">{{$datos['simat']->dia8->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia8'][0]->dia_8 != 0 ? $datos['simat']['dia8'][0]->dia_8 +  $datos['simat']['dia8'][0]->dia_8observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia9" data-modalidad="JM-RI">{{$datos['simat']->dia9->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia9'][0]->dia_9 != 0 ? $datos['simat']['dia9'][0]->dia_9 +  $datos['simat']['dia9'][0]->dia_9observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia10" data-modalidad="JM-RI">{{$datos['simat']->dia10->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia10'][0]->dia_10 != 0 ? $datos['simat']['dia10'][0]->dia_10 +  $datos['simat']['dia10'][0]->dia_10observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia11" data-modalidad="JM-RI">{{$datos['simat']->dia11->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia11'][0]->dia_11 != 0 ? $datos['simat']['dia11'][0]->dia_11 +  $datos['simat']['dia11'][0]->dia_11observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia12" data-modalidad="JM-RI">{{$datos['simat']->dia12->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia12'][0]->dia_12 != 0 ? $datos['simat']['dia12'][0]->dia_12 +  $datos['simat']['dia12'][0]->dia_12observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia13" data-modalidad="JM-RI">{{$datos['simat']->dia13->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia13'][0]->dia_13 != 0 ? $datos['simat']['dia13'][0]->dia_13 +  $datos['simat']['dia13'][0]->dia_13observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia14" data-modalidad="JM-RI">{{$datos['simat']->dia14->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia14'][0]->dia_14 != 0 ? $datos['simat']['dia14'][0]->dia_14 +  $datos['simat']['dia14'][0]->dia_14observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia15" data-modalidad="JM-RI">{{$datos['simat']->dia15->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia15'][0]->dia_15 != 0 ? $datos['simat']['dia15'][0]->dia_15 +  $datos['simat']['dia15'][0]->dia_15observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia16" data-modalidad="JM-RI">{{$datos['simat']->dia16->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia16'][0]->dia_16 != 0 ? $datos['simat']['dia16'][0]->dia_16 +  $datos['simat']['dia16'][0]->dia_16observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia17" data-modalidad="JM-RI">{{$datos['simat']->dia17->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia17'][0]->dia_17 != 0 ? $datos['simat']['dia17'][0]->dia_17 +  $datos['simat']['dia17'][0]->dia_17observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia18" data-modalidad="JM-RI">{{$datos['simat']->dia18->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia18'][0]->dia_18 != 0 ? $datos['simat']['dia18'][0]->dia_18 +  $datos['simat']['dia18'][0]->dia_18observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia19" data-modalidad="JM-RI">{{$datos['simat']->dia19->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia19'][0]->dia_19 != 0 ? $datos['simat']['dia19'][0]->dia_19 +  $datos['simat']['dia19'][0]->dia_19observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia20" data-modalidad="JM-RI">{{$datos['simat']->dia20->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia20'][0]->dia_20 != 0 ? $datos['simat']['dia20'][0]->dia_20 +  $datos['simat']['dia20'][0]->dia_20observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia21" data-modalidad="JM-RI">{{$datos['simat']->dia21->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia21'][0]->dia_21 != 0 ? $datos['simat']['dia21'][0]->dia_21 +  $datos['simat']['dia21'][0]->dia_21observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia22" data-modalidad="JM-RI">{{$datos['simat']->dia22->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia22'][0]->dia_22 != 0 ? $datos['simat']['dia22'][0]->dia_22 +  $datos['simat']['dia22'][0]->dia_22observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia23" data-modalidad="JM-RI">{{$datos['simat']->dia23->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia23'][0]->dia_23 != 0 ? $datos['simat']['dia23'][0]->dia_23 +  $datos['simat']['dia23'][0]->dia_23observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia24" data-modalidad="JM-RI">{{$datos['simat']->dia24->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia24'][0]->dia_24 != 0 ? $datos['simat']['dia24'][0]->dia_24 +  $datos['simat']['dia24'][0]->dia_24observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia25" data-modalidad="JM-RI">{{$datos['simat']->dia25->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia25'][0]->dia_25 != 0 ? $datos['simat']['dia25'][0]->dia_25 +  $datos['simat']['dia25'][0]->dia_25observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia26" data-modalidad="JM-RI">{{$datos['simat']->dia26->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia26'][0]->dia_26 != 0 ? $datos['simat']['dia26'][0]->dia_26 +  $datos['simat']['dia26'][0]->dia_26observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia27" data-modalidad="JM-RI">{{$datos['simat']->dia27->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia27'][0]->dia_27 != 0 ? $datos['simat']['dia27'][0]->dia_27 +  $datos['simat']['dia27'][0]->dia_27observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia28" data-modalidad="JM-RI">{{$datos['simat']->dia28->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia28'][0]->dia_28 != 0 ? $datos['simat']['dia28'][0]->dia_28 +  $datos['simat']['dia28'][0]->dia_28observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia29" data-modalidad="JM-RI">{{$datos['simat']->dia29->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia29'][0]->dia_29 != 0 ? $datos['simat']['dia29'][0]->dia_29 +  $datos['simat']['dia29'][0]->dia_29observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia30" data-modalidad="JM-RI">{{$datos['simat']->dia30->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia30'][0]->dia_30 != 0 ? $datos['simat']['dia30'][0]->dia_30 +  $datos['simat']['dia30'][0]->dia_30observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia31" data-modalidad="JM-RI">{{$datos['simat']->dia31->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia31'][0]->dia_31 != 0 ? $datos['simat']['dia31'][0]->dia_31 +  $datos['simat']['dia31'][0]->dia_31observacion : 0 : 0 }}</td>
                        <td class="tg-0pky" data-id="{{$datos['simat']->consecutivo}}" data-dias="diasAtendidos" data-modalidad="JM-RI">
                          @php
                          $suma = 0; 
                          $suma += $datos['simat']['dia1'][0]->dia_1 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia2'][0]->dia_2 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia3'][0]->dia_3 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia4'][0]->dia_4 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia5'][0]->dia_5 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia6'][0]->dia_6 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia7'][0]->dia_7 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia8'][0]->dia_8 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia9'][0]->dia_9 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia10'][0]->dia_10 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia11'][0]->dia_11 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia12'][0]->dia_12 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia13'][0]->dia_13 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia14'][0]->dia_14 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia15'][0]->dia_15 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia16'][0]->dia_16 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia17'][0]->dia_17 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia18'][0]->dia_18 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia19'][0]->dia_19 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia20'][0]->dia_20 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia21'][0]->dia_21 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia22'][0]->dia_22 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia23'][0]->dia_23 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia24'][0]->dia_24 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia25'][0]->dia_25 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia26'][0]->dia_26 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia27'][0]->dia_27 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia28'][0]->dia_28 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia29'][0]->dia_29 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia30'][0]->dia_30 != 0 ? 1 : 0;
                          $suma += $datos['simat']['dia31'][0]->dia_31 != 0 ? 1 : 0;
 
                          @endphp
                          {{$suma}}
                        </td>
                        <td class="tg-0pky" data-id="{{$datos['simat']->consecutivo}}" data-totalraciones="totalRaciones" data-modalidad="JM-RI">
                          @php
                          $suma1 = 0; 
                          $suma1 += $datos['simat']['dia1'][0]->dia_1 != 0 ? $datos['simat']['dia1'][0]->dia_1 + $datos['simat']['dia1'][0]->dia_1observacion : 0;
                          $suma1 += $datos['simat']['dia2'][0]->dia_2 != 0 ? $datos['simat']['dia2'][0]->dia_2 + $datos['simat']['dia2'][0]->dia_2observacion : 0;
                          $suma1 += $datos['simat']['dia3'][0]->dia_3 != 0 ? $datos['simat']['dia3'][0]->dia_3 + $datos['simat']['dia3'][0]->dia_3observacion : 0;
                          $suma1 += $datos['simat']['dia4'][0]->dia_4 != 0 ? $datos['simat']['dia4'][0]->dia_4 + $datos['simat']['dia4'][0]->dia_4observacion : 0;
                          $suma1 += $datos['simat']['dia5'][0]->dia_5 != 0 ? $datos['simat']['dia5'][0]->dia_5 + $datos['simat']['dia5'][0]->dia_5observacion : 0;
                          $suma1 += $datos['simat']['dia6'][0]->dia_6 != 0 ? $datos['simat']['dia6'][0]->dia_6 + $datos['simat']['dia6'][0]->dia_6observacion : 0;
                          $suma1 += $datos['simat']['dia7'][0]->dia_7 != 0 ? $datos['simat']['dia7'][0]->dia_7 + $datos['simat']['dia7'][0]->dia_7observacion : 0;
                          $suma1 += $datos['simat']['dia8'][0]->dia_8 != 0 ? $datos['simat']['dia8'][0]->dia_8 + $datos['simat']['dia8'][0]->dia_8observacion : 0;
                          $suma1 += $datos['simat']['dia9'][0]->dia_9 != 0 ? $datos['simat']['dia9'][0]->dia_9 + $datos['simat']['dia9'][0]->dia_9observacion : 0;
                          $suma1 += $datos['simat']['dia10'][0]->dia_10 != 0 ? $datos['simat']['dia10'][0]->dia_10 + $datos['simat']['dia10'][0]->dia_10observacion : 0;
                          $suma1 += $datos['simat']['dia11'][0]->dia_11 != 0 ? $datos['simat']['dia11'][0]->dia_11 + $datos['simat']['dia11'][0]->dia_11observacion : 0;
                          $suma1 += $datos['simat']['dia12'][0]->dia_12 != 0 ? $datos['simat']['dia12'][0]->dia_12 + $datos['simat']['dia12'][0]->dia_12observacion : 0;
                          $suma1 += $datos['simat']['dia13'][0]->dia_13 != 0 ? $datos['simat']['dia13'][0]->dia_13 + $datos['simat']['dia13'][0]->dia_13observacion : 0;
                          $suma1 += $datos['simat']['dia14'][0]->dia_14 != 0 ? $datos['simat']['dia14'][0]->dia_14 + $datos['simat']['dia14'][0]->dia_14observacion : 0;
                          $suma1 += $datos['simat']['dia15'][0]->dia_15 != 0 ? $datos['simat']['dia15'][0]->dia_15 + $datos['simat']['dia15'][0]->dia_15observacion : 0;
                          $suma1 += $datos['simat']['dia16'][0]->dia_16 != 0 ? $datos['simat']['dia16'][0]->dia_16 + $datos['simat']['dia16'][0]->dia_16observacion : 0;
                          $suma1 += $datos['simat']['dia17'][0]->dia_17 != 0 ? $datos['simat']['dia17'][0]->dia_17 + $datos['simat']['dia17'][0]->dia_17observacion : 0;
                          $suma1 += $datos['simat']['dia18'][0]->dia_18 != 0 ? $datos['simat']['dia18'][0]->dia_18 + $datos['simat']['dia18'][0]->dia_18observacion : 0;
                          $suma1 += $datos['simat']['dia19'][0]->dia_19 != 0 ? $datos['simat']['dia19'][0]->dia_19 + $datos['simat']['dia19'][0]->dia_19observacion : 0;
                          $suma1 += $datos['simat']['dia20'][0]->dia_20 != 0 ? $datos['simat']['dia20'][0]->dia_20 + $datos['simat']['dia20'][0]->dia_20observacion : 0;
                          $suma1 += $datos['simat']['dia21'][0]->dia_21 != 0 ? $datos['simat']['dia21'][0]->dia_21 + $datos['simat']['dia21'][0]->dia_21observacion : 0;
                          $suma1 += $datos['simat']['dia22'][0]->dia_22 != 0 ? $datos['simat']['dia22'][0]->dia_22 + $datos['simat']['dia22'][0]->dia_22observacion : 0;
                          $suma1 += $datos['simat']['dia23'][0]->dia_23 != 0 ? $datos['simat']['dia23'][0]->dia_23 + $datos['simat']['dia23'][0]->dia_23observacion : 0;
                          $suma1 += $datos['simat']['dia24'][0]->dia_24 != 0 ? $datos['simat']['dia24'][0]->dia_24 + $datos['simat']['dia24'][0]->dia_24observacion : 0;
                          $suma1 += $datos['simat']['dia25'][0]->dia_25 != 0 ? $datos['simat']['dia25'][0]->dia_25 + $datos['simat']['dia25'][0]->dia_25observacion : 0;
                          $suma1 += $datos['simat']['dia26'][0]->dia_26 != 0 ? $datos['simat']['dia26'][0]->dia_26 + $datos['simat']['dia26'][0]->dia_26observacion : 0;
                          $suma1 += $datos['simat']['dia27'][0]->dia_27 != 0 ? $datos['simat']['dia27'][0]->dia_27 + $datos['simat']['dia27'][0]->dia_27observacion : 0;
                          $suma1 += $datos['simat']['dia28'][0]->dia_28 != 0 ? $datos['simat']['dia28'][0]->dia_28 + $datos['simat']['dia28'][0]->dia_28observacion : 0;
                          $suma1 += $datos['simat']['dia29'][0]->dia_29 != 0 ? $datos['simat']['dia29'][0]->dia_29 + $datos['simat']['dia29'][0]->dia_29observacion : 0;
                          $suma1 += $datos['simat']['dia30'][0]->dia_30 != 0 ? $datos['simat']['dia30'][0]->dia_30 + $datos['simat']['dia30'][0]->dia_30observacion : 0;
                          $suma1 += $datos['simat']['dia31'][0]->dia_31 != 0 ? $datos['simat']['dia31'][0]->dia_31 + $datos['simat']['dia31'][0]->dia_31observacion : 0;
                          @endphp
                          {{$suma1}}
                        </td>
                        <td class="tg-0pky" data-id="{{$datos['simat']->consecutivo}}" data-novedades="novedades" data-modalidad="JM-RI">
                          
                          @php
                          $sede = DB::table('Ris')->where('codigo_dane_sede',$datos['simat']->consecutivo)->first();
                         

                          $suma2 = 0;
                          $suma2 = $sede->dia_1 != 'Z' ? $sede->dia_1 != 'N' ? $datos['simat']['dia1'][0]->dia_1observacion : 0 : 0;
                          $suma2 = $sede->dia_2 != 'Z' ? $sede->dia_2 != 'N' ? $datos['simat']['dia2'][0]->dia_2observacion : 0 : 0;
                          $suma2 = $sede->dia_3 != 'Z' ? $sede->dia_3 != 'N' ? $datos['simat']['dia3'][0]->dia_3observacion : 0 : 0;
                          $suma2 = $sede->dia_4 != 'Z' ? $sede->dia_4 != 'N' ? $datos['simat']['dia4'][0]->dia_4observacion : 0 : 0;
                          $suma2 = $sede->dia_5 != 'Z' ? $sede->dia_5 != 'N' ? $datos['simat']['dia5'][0]->dia_5observacion : 0 : 0;
                          $suma2 = $sede->dia_6 != 'Z' ? $sede->dia_6 != 'N' ? $datos['simat']['dia6'][0]->dia_6observacion : 0 : 0;
                          $suma2 = $sede->dia_7 != 'Z' ? $sede->dia_7 != 'N' ? $datos['simat']['dia7'][0]->dia_7observacion : 0 : 0;
                          $suma2 = $sede->dia_8 != 'Z' ? $sede->dia_8 != 'N' ? $datos['simat']['dia8'][0]->dia_8observacion : 0 : 0;
                          $suma2 = $sede->dia_9 != 'Z' ? $sede->dia_9 != 'N' ? $datos['simat']['dia9'][0]->dia_9observacion : 0 : 0;
                          $suma2 = $sede->dia_10 != 'Z' ? $sede->dia_10 != 'N' ? $datos['simat']['dia10'][0]->dia_10observacion : 0 : 0;
                          $suma2 = $sede->dia_11 != 'Z' ? $sede->dia_11 != 'N' ? $datos['simat']['dia11'][0]->dia_11observacion : 0 : 0;
                          $suma2 = $sede->dia_12 != 'Z' ? $sede->dia_12 != 'N' ? $datos['simat']['dia12'][0]->dia_12observacion : 0 : 0;
                          $suma2 = $sede->dia_13 != 'Z' ? $sede->dia_13 != 'N' ? $datos['simat']['dia13'][0]->dia_13observacion : 0 : 0;
                          $suma2 = $sede->dia_14 != 'Z' ? $sede->dia_14 != 'N' ? $datos['simat']['dia14'][0]->dia_14observacion : 0 : 0;
                          $suma2 = $sede->dia_15 != 'Z' ? $sede->dia_15 != 'N' ? $datos['simat']['dia15'][0]->dia_15observacion : 0 : 0;
                          $suma2 = $sede->dia_16 != 'Z' ? $sede->dia_16 != 'N' ? $datos['simat']['dia16'][0]->dia_16observacion : 0 : 0;
                          $suma2 = $sede->dia_17 != 'Z' ? $sede->dia_17 != 'N' ? $datos['simat']['dia17'][0]->dia_17observacion : 0 : 0;
                          $suma2 = $sede->dia_18 != 'Z' ? $sede->dia_18 != 'N' ? $datos['simat']['dia18'][0]->dia_18observacion : 0 : 0;
                          $suma2 = $sede->dia_19 != 'Z' ? $sede->dia_19 != 'N' ? $datos['simat']['dia19'][0]->dia_19observacion : 0 : 0;
                          $suma2 = $sede->dia_20 != 'Z' ? $sede->dia_20 != 'N' ? $datos['simat']['dia20'][0]->dia_20observacion : 0 : 0;
                          $suma2 = $sede->dia_21 != 'Z' ? $sede->dia_21 != 'N' ? $datos['simat']['dia21'][0]->dia_21observacion : 0 : 0;
                          $suma2 = $sede->dia_22 != 'Z' ? $sede->dia_22 != 'N' ? $datos['simat']['dia22'][0]->dia_22observacion : 0 : 0;
                          $suma2 = $sede->dia_23 != 'Z' ? $sede->dia_23 != 'N' ? $datos['simat']['dia23'][0]->dia_23observacion : 0 : 0;
                          $suma2 = $sede->dia_24 != 'Z' ? $sede->dia_24 != 'N' ? $datos['simat']['dia24'][0]->dia_24observacion : 0 : 0;
                          $suma2 = $sede->dia_25 != 'Z' ? $sede->dia_25 != 'N' ? $datos['simat']['dia25'][0]->dia_25observacion : 0 : 0;
                          $suma2 = $sede->dia_26 != 'Z' ? $sede->dia_26 != 'N' ? $datos['simat']['dia26'][0]->dia_26observacion : 0 : 0;
                          $suma2 = $sede->dia_27 != 'Z' ? $sede->dia_27 != 'N' ? $datos['simat']['dia27'][0]->dia_27observacion : 0 : 0;
                          $suma2 = $sede->dia_28 != 'Z' ? $sede->dia_28 != 'N' ? $datos['simat']['dia28'][0]->dia_28observacion : 0 : 0;
                          $suma2 = $sede->dia_29 != 'Z' ? $sede->dia_29 != 'N' ? $datos['simat']['dia29'][0]->dia_29observacion : 0 : 0;
                          $suma2 = $sede->dia_30 != 'Z' ? $sede->dia_30 != 'N' ? $datos['simat']['dia30'][0]->dia_30observacion : 0 : 0;
                          $suma2 = $sede->dia_31 != 'Z' ? $sede->dia_31 != 'N' ? $datos['simat']['dia31'][0]->dia_31observacion : 0 : 0;
                          @endphp
                          {{$suma2}}
                        </td>
                        <td class="tg-0pky" data-id="{{$datos['simat']->consecutivo}}" data-devoluciones="devoluciones" data-modalidad="JM-RI">0</td>
                        <td class="tg-0pky"><button class="dt-button create-new btn btn-primary" tabindex="0"  type="button" ><span>+ Guardar</span></button></td>
                    </tr>
                    <tr>
                        <td class="uneditable tg-0pky">JT-RI</td>
                        @if(isset($datos['simat']['dia1'][1]))                        
                        <td style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia1" data-modalidad="JT-RI">{{$datos['simat']->dia1->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia1'][1]->dia_1 != 0 ? $datos['simat']['dia1'][1]->dia_1 +  $datos['simat']['dia1'][1]->dia_1observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia2" data-modalidad="JT-RI">{{$datos['simat']->dia2->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia2'][1]->dia_2 != 0 ? $datos['simat']['dia2'][1]->dia_2 +  $datos['simat']['dia2'][1]->dia_2observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia3" data-modalidad="JT-RI">{{$datos['simat']->dia3->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia3'][1]->dia_3 != 0 ? $datos['simat']['dia3'][1]->dia_3 +  $datos['simat']['dia3'][1]->dia_3observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia4" data-modalidad="JT-RI">{{$datos['simat']->dia4->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia4'][1]->dia_4 != 0 ? $datos['simat']['dia4'][1]->dia_4 +  $datos['simat']['dia4'][1]->dia_4observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia5" data-modalidad="JT-RI">{{$datos['simat']->dia5->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia5'][1]->dia_5 != 0 ? $datos['simat']['dia5'][1]->dia_5 +  $datos['simat']['dia5'][1]->dia_5observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia6" data-modalidad="JT-RI">{{$datos['simat']->dia6->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia6'][1]->dia_6 != 0 ? $datos['simat']['dia6'][1]->dia_6 +  $datos['simat']['dia6'][1]->dia_6observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia7" data-modalidad="JT-RI">{{$datos['simat']->dia7->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia7'][1]->dia_7 != 0 ? $datos['simat']['dia7'][1]->dia_7 +  $datos['simat']['dia7'][1]->dia_7observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia8" data-modalidad="JT-RI">{{$datos['simat']->dia8->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia8'][1]->dia_8 != 0 ? $datos['simat']['dia8'][1]->dia_8 +  $datos['simat']['dia8'][1]->dia_8observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia9" data-modalidad="JT-RI">{{$datos['simat']->dia9->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia9'][1]->dia_9 != 0 ? $datos['simat']['dia9'][1]->dia_9 +  $datos['simat']['dia9'][1]->dia_9observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia10" data-modalidad="JT-RI">{{$datos['simat']->dia10->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia10'][1]->dia_10 != 0 ? $datos['simat']['dia10'][1]->dia_10 +  $datos['simat']['dia10'][1]->dia_10observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia11" data-modalidad="JT-RI">{{$datos['simat']->dia11->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia11'][1]->dia_11 != 0 ? $datos['simat']['dia11'][1]->dia_11 +  $datos['simat']['dia11'][1]->dia_11observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia12" data-modalidad="JT-RI">{{$datos['simat']->dia12->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia12'][1]->dia_12 != 0 ? $datos['simat']['dia12'][1]->dia_12 +  $datos['simat']['dia12'][1]->dia_12observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia13" data-modalidad="JT-RI">{{$datos['simat']->dia13->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia13'][1]->dia_13 != 0 ? $datos['simat']['dia13'][1]->dia_13 +  $datos['simat']['dia13'][1]->dia_13observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia14" data-modalidad="JT-RI">{{$datos['simat']->dia14->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia14'][1]->dia_14 != 0 ? $datos['simat']['dia14'][1]->dia_14 +  $datos['simat']['dia14'][1]->dia_14observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia15" data-modalidad="JT-RI">{{$datos['simat']->dia15->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia15'][1]->dia_15 != 0 ? $datos['simat']['dia15'][1]->dia_15 +  $datos['simat']['dia15'][1]->dia_15observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia16" data-modalidad="JT-RI">{{$datos['simat']->dia16->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia16'][1]->dia_16 != 0 ? $datos['simat']['dia16'][1]->dia_16 +  $datos['simat']['dia16'][1]->dia_16observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia17" data-modalidad="JT-RI">{{$datos['simat']->dia17->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia17'][1]->dia_17 != 0 ? $datos['simat']['dia17'][1]->dia_17 +  $datos['simat']['dia17'][1]->dia_17observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia18" data-modalidad="JT-RI">{{$datos['simat']->dia18->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia18'][1]->dia_18 != 0 ? $datos['simat']['dia18'][1]->dia_18 +  $datos['simat']['dia18'][1]->dia_18observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia19" data-modalidad="JT-RI">{{$datos['simat']->dia19->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia19'][1]->dia_19 != 0 ? $datos['simat']['dia19'][1]->dia_19 +  $datos['simat']['dia19'][1]->dia_19observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia20" data-modalidad="JT-RI">{{$datos['simat']->dia20->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia20'][1]->dia_20 != 0 ? $datos['simat']['dia20'][1]->dia_20 +  $datos['simat']['dia20'][1]->dia_20observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia21" data-modalidad="JT-RI">{{$datos['simat']->dia21->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia21'][1]->dia_21 != 0 ? $datos['simat']['dia21'][1]->dia_21 +  $datos['simat']['dia21'][1]->dia_21observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['simat']->consecutivo}}" data-dia="dia22" data-modalidad="JT-RI">{{$datos['simat']->dia22->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia22'][1]->dia_22 != 0 ? $datos['simat']['dia22'][1]->dia_22 +  $datos['simat']['dia22'][1]->dia_22observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['simat']->consecutivo}}" data-dia="dia23" data-modalidad="JT-RI">{{$datos['simat']->dia23->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia23'][1]->dia_23 != 0 ? $datos['simat']['dia23'][1]->dia_23 +  $datos['simat']['dia23'][1]->dia_23observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['simat']->consecutivo}}" data-dia="dia24" data-modalidad="JT-RI">{{$datos['simat']->dia24->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia24'][1]->dia_24 != 0 ? $datos['simat']['dia24'][1]->dia_24 +  $datos['simat']['dia24'][1]->dia_24observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['simat']->consecutivo}}" data-dia="dia25" data-modalidad="JT-RI">{{$datos['simat']->dia25->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia25'][1]->dia_25 != 0 ? $datos['simat']['dia25'][1]->dia_25 +  $datos['simat']['dia25'][1]->dia_25observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['simat']->consecutivo}}" data-dia="dia26" data-modalidad="JT-RI">{{$datos['simat']->dia26->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia26'][1]->dia_26 != 0 ? $datos['simat']['dia26'][1]->dia_26 +  $datos['simat']['dia26'][1]->dia_26observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia27" data-modalidad="JT-RI">{{$datos['simat']->dia27->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia27'][1]->dia_27 != 0 ? $datos['simat']['dia27'][1]->dia_27 +  $datos['simat']['dia27'][1]->dia_27observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia28" data-modalidad="JT-RI">{{$datos['simat']->dia28->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia28'][1]->dia_28 != 0 ? $datos['simat']['dia28'][1]->dia_28 +  $datos['simat']['dia28'][1]->dia_28observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia29" data-modalidad="JT-RI">{{$datos['simat']->dia29->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia29'][1]->dia_29 != 0 ? $datos['simat']['dia29'][1]->dia_29 +  $datos['simat']['dia29'][1]->dia_29observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia30" data-modalidad="JT-RI">{{$datos['simat']->dia30->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia30'][1]->dia_30 != 0 ? $datos['simat']['dia30'][1]->dia_30 +  $datos['simat']['dia30'][1]->dia_30observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['simat']->consecutivo}}" data-dia="dia31" data-modalidad="JT-RI">{{$datos['simat']->dia31->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia31'][1]->dia_31 != 0 ? $datos['simat']['dia31'][1]->dia_31 +  $datos['simat']['dia31'][1]->dia_31observacion : 0 : 0 }}</td>
                        <td class="tg-0pky" data-id="{{$datos['simat']->consecutivo}}" data-dias="diasAtendidos" data-modalidad="JT-RI">
                          @php
                            $suma = 0;
                            $suma += $datos['simat']['dia1'][1]->dia_1 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia2'][1]->dia_2 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia3'][1]->dia_3 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia4'][1]->dia_4 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia5'][1]->dia_5 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia6'][1]->dia_6 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia7'][1]->dia_7 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia8'][1]->dia_8 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia9'][1]->dia_9 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia10'][1]->dia_10 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia11'][1]->dia_11 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia12'][1]->dia_12 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia13'][1]->dia_13 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia14'][1]->dia_14 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia15'][1]->dia_15 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia16'][1]->dia_16 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia17'][1]->dia_17 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia18'][1]->dia_18 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia19'][1]->dia_19 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia20'][1]->dia_20 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia21'][1]->dia_21 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia22'][1]->dia_22 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia23'][1]->dia_23 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia24'][1]->dia_24 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia25'][1]->dia_25 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia26'][1]->dia_26 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia27'][1]->dia_27 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia28'][1]->dia_28 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia29'][1]->dia_29 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia30'][1]->dia_30 != 0 ? 1 : 0;
                            $suma += $datos['simat']['dia31'][1]->dia_31 != 0 ? 1 : 0;

                          @endphp
                          {{$suma}}
                        </td>
                        <td class="tg-0pky" data-id="{{$datos['simat']->consecutivo}}" data-totalraciones="totalRaciones" data-modalidad="JT-RI">
                          @php
                          $suma1 = 0; 
                          $suma1 += $datos['simat']['dia1'][1]->dia_1 != 0 ? $datos['simat']['dia1'][1]->dia_1 + $datos['simat']['dia1'][1]->dia_1observacion : 0;
                          $suma1 += $datos['simat']['dia2'][1]->dia_2 != 0 ? $datos['simat']['dia2'][1]->dia_2 + $datos['simat']['dia2'][1]->dia_2observacion : 0;
                          $suma1 += $datos['simat']['dia3'][1]->dia_3 != 0 ? $datos['simat']['dia3'][1]->dia_3 + $datos['simat']['dia3'][1]->dia_3observacion : 0;
                          $suma1 += $datos['simat']['dia4'][1]->dia_4 != 0 ? $datos['simat']['dia4'][1]->dia_4 + $datos['simat']['dia4'][1]->dia_4observacion : 0;
                          $suma1 += $datos['simat']['dia5'][1]->dia_5 != 0 ? $datos['simat']['dia5'][1]->dia_5 + $datos['simat']['dia5'][1]->dia_5observacion : 0;
                          $suma1 += $datos['simat']['dia6'][1]->dia_6 != 0 ? $datos['simat']['dia6'][1]->dia_6 + $datos['simat']['dia6'][1]->dia_6observacion : 0;
                          $suma1 += $datos['simat']['dia7'][1]->dia_7 != 0 ? $datos['simat']['dia7'][1]->dia_7 + $datos['simat']['dia7'][1]->dia_7observacion : 0;
                          $suma1 += $datos['simat']['dia8'][1]->dia_8 != 0 ? $datos['simat']['dia8'][1]->dia_8 + $datos['simat']['dia8'][1]->dia_8observacion : 0;
                          $suma1 += $datos['simat']['dia9'][1]->dia_9 != 0 ? $datos['simat']['dia9'][1]->dia_9 + $datos['simat']['dia9'][1]->dia_9observacion : 0;
                          $suma1 += $datos['simat']['dia10'][1]->dia_10 != 0 ? $datos['simat']['dia10'][1]->dia_10 + $datos['simat']['dia10'][1]->dia_10observacion : 0;
                          $suma1 += $datos['simat']['dia11'][1]->dia_11 != 0 ? $datos['simat']['dia11'][1]->dia_11 + $datos['simat']['dia11'][1]->dia_11observacion : 0;
                          $suma1 += $datos['simat']['dia12'][1]->dia_12 != 0 ? $datos['simat']['dia12'][1]->dia_12 + $datos['simat']['dia12'][1]->dia_12observacion : 0;
                          $suma1 += $datos['simat']['dia13'][1]->dia_13 != 0 ? $datos['simat']['dia13'][1]->dia_13 + $datos['simat']['dia13'][1]->dia_13observacion : 0;
                          $suma1 += $datos['simat']['dia14'][1]->dia_14 != 0 ? $datos['simat']['dia14'][1]->dia_14 + $datos['simat']['dia14'][1]->dia_14observacion : 0;
                          $suma1 += $datos['simat']['dia15'][1]->dia_15 != 0 ? $datos['simat']['dia15'][1]->dia_15 + $datos['simat']['dia15'][1]->dia_15observacion : 0;
                          $suma1 += $datos['simat']['dia16'][1]->dia_16 != 0 ? $datos['simat']['dia16'][1]->dia_16 + $datos['simat']['dia16'][1]->dia_16observacion : 0;
                          $suma1 += $datos['simat']['dia17'][1]->dia_17 != 0 ? $datos['simat']['dia17'][1]->dia_17 + $datos['simat']['dia17'][1]->dia_17observacion : 0;
                          $suma1 += $datos['simat']['dia18'][1]->dia_18 != 0 ? $datos['simat']['dia18'][1]->dia_18 + $datos['simat']['dia18'][1]->dia_18observacion : 0;
                          $suma1 += $datos['simat']['dia19'][1]->dia_19 != 0 ? $datos['simat']['dia19'][1]->dia_19 + $datos['simat']['dia19'][1]->dia_19observacion : 0;
                          $suma1 += $datos['simat']['dia20'][1]->dia_20 != 0 ? $datos['simat']['dia20'][1]->dia_20 + $datos['simat']['dia20'][1]->dia_20observacion : 0;
                          $suma1 += $datos['simat']['dia21'][1]->dia_21 != 0 ? $datos['simat']['dia21'][1]->dia_21 + $datos['simat']['dia21'][1]->dia_21observacion : 0;
                          $suma1 += $datos['simat']['dia22'][1]->dia_22 != 0 ? $datos['simat']['dia22'][1]->dia_22 + $datos['simat']['dia22'][1]->dia_22observacion : 0;
                          $suma1 += $datos['simat']['dia23'][1]->dia_23 != 0 ? $datos['simat']['dia23'][1]->dia_23 + $datos['simat']['dia23'][1]->dia_23observacion : 0;
                          $suma1 += $datos['simat']['dia24'][1]->dia_24 != 0 ? $datos['simat']['dia24'][1]->dia_24 + $datos['simat']['dia24'][1]->dia_24observacion : 0;
                          $suma1 += $datos['simat']['dia25'][1]->dia_25 != 0 ? $datos['simat']['dia25'][1]->dia_25 + $datos['simat']['dia25'][1]->dia_25observacion : 0;
                          $suma1 += $datos['simat']['dia26'][1]->dia_26 != 0 ? $datos['simat']['dia26'][1]->dia_26 + $datos['simat']['dia26'][1]->dia_26observacion : 0;
                          $suma1 += $datos['simat']['dia27'][1]->dia_27 != 0 ? $datos['simat']['dia27'][1]->dia_27 + $datos['simat']['dia27'][1]->dia_27observacion : 0;
                          $suma1 += $datos['simat']['dia28'][1]->dia_28 != 0 ? $datos['simat']['dia28'][1]->dia_28 + $datos['simat']['dia28'][1]->dia_28observacion : 0;
                          $suma1 += $datos['simat']['dia29'][1]->dia_29 != 0 ? $datos['simat']['dia29'][1]->dia_29 + $datos['simat']['dia29'][1]->dia_29observacion : 0;
                          $suma1 += $datos['simat']['dia30'][1]->dia_30 != 0 ? $datos['simat']['dia30'][1]->dia_30 + $datos['simat']['dia30'][1]->dia_30observacion : 0;
                          $suma1 += $datos['simat']['dia31'][1]->dia_31 != 0 ? $datos['simat']['dia31'][1]->dia_31 + $datos['simat']['dia31'][1]->dia_31observacion : 0;
                          @endphp
                          {{$suma1}}
                        </td>
                        <td class="tg-0pky" data-id="{{$datos['simat']->consecutivo}}" data-novedades="novedades" data-modalidad="JT-RI">
                          
                          @php
                          $sede = DB::table('Ris')->where('codigo_dane_sede',$datos['simat']->consecutivo)->first();
                         
                      
                          $suma2 = 0;
                          $suma2 = $sede->dia_1 != 'Z' ? $sede->dia_1 != 'N' ? $datos['simat']['dia1'][1]->dia_1observacion : 0 : 0;
                          $suma2 = $sede->dia_2 != 'Z' ? $sede->dia_2 != 'N' ? $datos['simat']['dia2'][1]->dia_2observacion : 0 : 0;
                          $suma2 = $sede->dia_3 != 'Z' ? $sede->dia_3 != 'N' ? $datos['simat']['dia3'][1]->dia_3observacion : 0 : 0;
                          $suma2 = $sede->dia_4 != 'Z' ? $sede->dia_4 != 'N' ? $datos['simat']['dia4'][1]->dia_4observacion : 0 : 0;
                          $suma2 = $sede->dia_5 != 'Z' ? $sede->dia_5 != 'N' ? $datos['simat']['dia5'][1]->dia_5observacion : 0 : 0;
                          $suma2 = $sede->dia_6 != 'Z' ? $sede->dia_6 != 'N' ? $datos['simat']['dia6'][1]->dia_6observacion : 0 : 0;
                          $suma2 = $sede->dia_7 != 'Z' ? $sede->dia_7 != 'N' ? $datos['simat']['dia7'][1]->dia_7observacion : 0 : 0;
                          $suma2 = $sede->dia_8 != 'Z' ? $sede->dia_8 != 'N' ? $datos['simat']['dia8'][1]->dia_8observacion : 0 : 0;
                          $suma2 = $sede->dia_9 != 'Z' ? $sede->dia_9 != 'N' ? $datos['simat']['dia9'][1]->dia_9observacion : 0 : 0;
                          $suma2 = $sede->dia_10 != 'Z' ? $sede->dia_10 != 'N' ? $datos['simat']['dia10'][1]->dia_10observacion : 0 : 0;
                          $suma2 = $sede->dia_11 != 'Z' ? $sede->dia_11 != 'N' ? $datos['simat']['dia11'][1]->dia_11observacion : 0 : 0;
                          $suma2 = $sede->dia_12 != 'Z' ? $sede->dia_12 != 'N' ? $datos['simat']['dia12'][1]->dia_12observacion : 0 : 0;
                          $suma2 = $sede->dia_13 != 'Z' ? $sede->dia_13 != 'N' ? $datos['simat']['dia13'][1]->dia_13observacion : 0 : 0;
                          $suma2 = $sede->dia_14 != 'Z' ? $sede->dia_14 != 'N' ? $datos['simat']['dia14'][1]->dia_14observacion : 0 : 0;
                          $suma2 = $sede->dia_15 != 'Z' ? $sede->dia_15 != 'N' ? $datos['simat']['dia15'][1]->dia_15observacion : 0 : 0;
                          $suma2 = $sede->dia_16 != 'Z' ? $sede->dia_16 != 'N' ? $datos['simat']['dia16'][1]->dia_16observacion : 0 : 0;
                          $suma2 = $sede->dia_17 != 'Z' ? $sede->dia_17 != 'N' ? $datos['simat']['dia17'][1]->dia_17observacion : 0 : 0;
                          $suma2 = $sede->dia_18 != 'Z' ? $sede->dia_18 != 'N' ? $datos['simat']['dia18'][1]->dia_18observacion : 0 : 0;
                          $suma2 = $sede->dia_19 != 'Z' ? $sede->dia_19 != 'N' ? $datos['simat']['dia19'][1]->dia_19observacion : 0 : 0;
                          $suma2 = $sede->dia_20 != 'Z' ? $sede->dia_20 != 'N' ? $datos['simat']['dia20'][1]->dia_20observacion : 0 : 0;
                          $suma2 = $sede->dia_21 != 'Z' ? $sede->dia_21 != 'N' ? $datos['simat']['dia21'][1]->dia_21observacion : 0 : 0;
                          $suma2 = $sede->dia_22 != 'Z' ? $sede->dia_22 != 'N' ? $datos['simat']['dia22'][1]->dia_22observacion : 0 : 0;
                          $suma2 = $sede->dia_23 != 'Z' ? $sede->dia_23 != 'N' ? $datos['simat']['dia23'][1]->dia_23observacion : 0 : 0;
                          $suma2 = $sede->dia_24 != 'Z' ? $sede->dia_24 != 'N' ? $datos['simat']['dia24'][1]->dia_24observacion : 0 : 0;
                          $suma2 = $sede->dia_25 != 'Z' ? $sede->dia_25 != 'N' ? $datos['simat']['dia25'][1]->dia_25observacion : 0 : 0;
                          $suma2 = $sede->dia_26 != 'Z' ? $sede->dia_26 != 'N' ? $datos['simat']['dia26'][1]->dia_26observacion : 0 : 0;
                          $suma2 = $sede->dia_27 != 'Z' ? $sede->dia_27 != 'N' ? $datos['simat']['dia27'][1]->dia_27observacion : 0 : 0;
                          $suma2 = $sede->dia_28 != 'Z' ? $sede->dia_28 != 'N' ? $datos['simat']['dia28'][1]->dia_28observacion : 0 : 0;
                          $suma2 = $sede->dia_29 != 'Z' ? $sede->dia_29 != 'N' ? $datos['simat']['dia29'][1]->dia_29observacion : 0 : 0;
                          $suma2 = $sede->dia_30 != 'Z' ? $sede->dia_30 != 'N' ? $datos['simat']['dia30'][1]->dia_30observacion : 0 : 0;
                          $suma2 = $sede->dia_31 != 'Z' ? $sede->dia_31 != 'N' ? $datos['simat']['dia31'][1]->dia_31observacion : 0 : 0;
                          @endphp
                          {{$suma2}}
                        </td>
                        <td class="tg-0pky" data-id="{{$datos['simat']->consecutivo}}" data-devoluciones="devoluciones" data-modalidad="JT-RI">0</td>
                        <td class="tg-0pky"><button class="dt-button create-new btn btn-primary" tabindex="0"  type="button" ><span>+ Guardar</span></button></td>
                        @else
                        <td style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                        <td class="tg-0pky">0</td>
                        <td class="tg-0pky">0</td>
                        <td class="tg-0pky">0</td>
                        <td class="tg-0pky">0</td>
                        <td class="tg-0pky"><button class="dt-button create-new btn btn-primary" tabindex="0"  type="button" ><span>+ Guardar</span></button></td>
                        @endif
                        
                    </tr>
                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Modal to add new record -->
  
</section>
<!--/ Basic table -->



<!--/ Multilingual -->
@endsection


@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/mindmup-editabletable.js')) }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  
  <script type="text/javascript">
    $('#editable').editableTableWidget();
    $('#editable td.uneditable').on('change', function(evt, newValue) {
            return false;
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
    $('#editable td').on('change', function(evt, newValue) {
          var sede_id = $(this).data('id');
          var dia = $(this).data('dia');
          var modalidad = $(this).data('modalidad');          
          var diasAtendidos = $(this).data('dias');
          var totalRaciones = $(this).data('totalraciones');
          var novedades = $(this).data('novedades');
          var devoluciones = $(this).data('devoluciones');

      

          if(typeof dia != 'undefined'){
            dia = dia;
          }
          
          if(typeof diasAtendidos != 'undefined'){
            diasAtendidos = newValue;
          }
          if(typeof totalRaciones != 'undefined'){
            totalRaciones = newValue;
          }
          if(typeof novedades != 'undefined'){
            novedades = newValue;
          }
          if(typeof devoluciones != 'undefined'){
            devoluciones = newValue;
          }
          
          
          
          $.get( "updateConsolidado", { 
                  value: newValue,
                  sede_id: sede_id,
                  dia: dia,
                  modalidad: modalidad,
                  diasAtendidos: diasAtendidos,
                  totalRaciones: totalRaciones,
                  novedades: novedades,
                  devoluciones: devoluciones
                  })
                  .done(function( data ) {
                          console.log( "Data Loaded: " + data );
                  });     
          ;
    });
    $(document).ready(function(){
        $.ajax({
          url: '/institucion/tabla',
          type: 'get',
          dataType: 'json',
          success:function(response){
          
          var len = response.length;
          
          $("#institucion").empty();
          for( var i = 0; i<len; i++){
            var id = response[i]['consecutivo'];
            var name = response[i]['institucion'] + " - " + response[i]['sede'];
            
            $("#institucion").append("<option value='"+id+"'>"+name+"</option>");
            
            }
          }
        });
       
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );     
    });/* Edit customer */
    var tipo = $('#tipo1').val();
    $('body').on('click', '#edit-customer', function () {
      var customer_id = $(this).data('id');
      
      $.get('/cruces/registro/'+customer_id+'/'+tipo, function (data) {
       
      $('#btn-update').val("Update");
      $('#modals-slide-in').modal('show');
      $('#estudiante-id').val(data.id);
      $('#primerN').html(data.PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO);
      $('#segundoN').html(data.SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO);
      $('#primerA').html(data.PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO);
      $('#segundoA').html(data.SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO);
      $('#institucion1').html(data.INSTITUCION);
      $('#sede1').html(data.SEDE);
      });

      var documento_id = $('#id');
      
      $.get('/cruces/registrosimat/'+customer_id+'/'+tipo, function (data) {
        console.log(data);
      
      if(data.vacio){
        $('#tipodocu').html('');
        $('#docu').html('');
        $('#primerNS').html('');
        $('#segundoNS').html('');
        $('#primerAS').html('');
        $('#segundoAS').html('');
        $('#institucionS').html('');
        $('#sedeS').html('');
        $('#estadoS').html('No encontrado en el SIMAT');
      }else{
        $('#tipodocu').html(data.tioodoc);
        $('#docu').html(data.doc);
        $('#primerNS').html(data.nombre1);
        $('#segundoNS').html(data.nombre2);
        $('#primerAS').html(data.apellido1);
        $('#segundoAS').html(data.apellido2);
        $('#institucionS').html(data.institucion);
        $('#sedeS').html(data.sede);
        $('#estadoS').html(data.estado);
      }
     
      })
    });
    $('#btn-save').click(function(){
      var customer_id = $('#estudiante-id').val();
        var observaciones = $('#observaciones').val();
        $.ajax({
          type: "GET",
          url: "/cruces/observacion",
          data: {
          "id": customer_id,
          "tipo": tipo,
          "observacion": observaciones
        },
        success: function (data) {
          console.log(data);
          $('#msg').html('Estudiante actualizado correctamente');
          $('#msg').show();
          $('#modals-slide-in').modal('hide');
        },
        error: function (data) {
          console.log('Error:', data);
        }
        });
    });

   
    </script>

@endsection

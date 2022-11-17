
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
  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet" />
  
@endsection
 
@section('content')
<div class="row">
  <div class="col-12">
    <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
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
            <table class="dt-complex-header table table-bordered table-responsive table-sm" id="editable">
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
                        <td class="tg-lboi" rowspan="2">{{$datos['simat']->sede}}</td>
                        <td class="tg-0pky">JM-RI</td>
                        <td style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia1->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia1'][0]->dia_1 != 0 ? $datos['simat']['dia1'][0]->dia_1 +  $datos['simat']['dia1'][0]->dia_1observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia2->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia2'][0]->dia_2 != 0 ? $datos['simat']['dia2'][0]->dia_2 +  $datos['simat']['dia2'][0]->dia_2observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia3->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia3'][0]->dia_3 != 0 ? $datos['simat']['dia3'][0]->dia_3 +  $datos['simat']['dia3'][0]->dia_3observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia4->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia4'][0]->dia_4 != 0 ? $datos['simat']['dia4'][0]->dia_4 +  $datos['simat']['dia4'][0]->dia_4observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia5->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia5'][0]->dia_5 != 0 ? $datos['simat']['dia5'][0]->dia_5 +  $datos['simat']['dia5'][0]->dia_5observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia6->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia6'][0]->dia_6 != 0 ? $datos['simat']['dia6'][0]->dia_6 +  $datos['simat']['dia6'][0]->dia_6observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia7->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia7'][0]->dia_7 != 0 ? $datos['simat']['dia7'][0]->dia_7 +  $datos['simat']['dia7'][0]->dia_7observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia8->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia8'][0]->dia_8 != 0 ? $datos['simat']['dia8'][0]->dia_8 +  $datos['simat']['dia8'][0]->dia_8observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia9->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia9'][0]->dia_9 != 0 ? $datos['simat']['dia9'][0]->dia_9 +  $datos['simat']['dia9'][0]->dia_9observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia10->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia10'][0]->dia_10 != 0 ? $datos['simat']['dia10'][0]->dia_10 +  $datos['simat']['dia10'][0]->dia_10observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia11->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia11'][0]->dia_11 != 0 ? $datos['simat']['dia11'][0]->dia_11 +  $datos['simat']['dia11'][0]->dia_11observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia12->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia12'][0]->dia_12 != 0 ? $datos['simat']['dia12'][0]->dia_12 +  $datos['simat']['dia12'][0]->dia_12observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia13->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia13'][0]->dia_13 != 0 ? $datos['simat']['dia13'][0]->dia_13 +  $datos['simat']['dia13'][0]->dia_13observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia14->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia14'][0]->dia_14 != 0 ? $datos['simat']['dia14'][0]->dia_14 +  $datos['simat']['dia14'][0]->dia_14observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia15->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia15'][0]->dia_15 != 0 ? $datos['simat']['dia15'][0]->dia_15 +  $datos['simat']['dia15'][0]->dia_15observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia16->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia16'][0]->dia_16 != 0 ? $datos['simat']['dia16'][0]->dia_16 +  $datos['simat']['dia16'][0]->dia_16observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia17->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia17'][0]->dia_17 != 0 ? $datos['simat']['dia17'][0]->dia_17 +  $datos['simat']['dia17'][0]->dia_17observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia18->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia18'][0]->dia_18 != 0 ? $datos['simat']['dia18'][0]->dia_18 +  $datos['simat']['dia18'][0]->dia_18observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia19->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia19'][0]->dia_19 != 0 ? $datos['simat']['dia19'][0]->dia_19 +  $datos['simat']['dia19'][0]->dia_19observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia20->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia20'][0]->dia_20 != 0 ? $datos['simat']['dia20'][0]->dia_20 +  $datos['simat']['dia20'][0]->dia_20observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia21->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia21'][0]->dia_21 != 0 ? $datos['simat']['dia21'][0]->dia_21 +  $datos['simat']['dia21'][0]->dia_21observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia22->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia22'][0]->dia_22 != 0 ? $datos['simat']['dia22'][0]->dia_22 +  $datos['simat']['dia22'][0]->dia_22observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia23->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia23'][0]->dia_23 != 0 ? $datos['simat']['dia23'][0]->dia_23 +  $datos['simat']['dia23'][0]->dia_23observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia24->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia24'][0]->dia_24 != 0 ? $datos['simat']['dia24'][0]->dia_24 +  $datos['simat']['dia24'][0]->dia_24observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia25->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia25'][0]->dia_25 != 0 ? $datos['simat']['dia25'][0]->dia_25 +  $datos['simat']['dia25'][0]->dia_25observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia26->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia26'][0]->dia_26 != 0 ? $datos['simat']['dia26'][0]->dia_26 +  $datos['simat']['dia26'][0]->dia_26observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia27->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia27'][0]->dia_27 != 0 ? $datos['simat']['dia27'][0]->dia_27 +  $datos['simat']['dia27'][0]->dia_27observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia28->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia28'][0]->dia_28 != 0 ? $datos['simat']['dia28'][0]->dia_28 +  $datos['simat']['dia28'][0]->dia_28observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia29->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia29'][0]->dia_29 != 0 ? $datos['simat']['dia29'][0]->dia_29 +  $datos['simat']['dia29'][0]->dia_29observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia30->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia30'][0]->dia_30 != 0 ? $datos['simat']['dia30'][0]->dia_30 +  $datos['simat']['dia30'][0]->dia_30observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia31->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia31'][0]->dia_31 != 0 ? $datos['simat']['dia31'][0]->dia_31 +  $datos['simat']['dia31'][0]->dia_31observacion : 0 : 0 }}</td>
                        <td class="tg-0pky">
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
                        <td class="tg-0pky">
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
                        <td class="tg-0pky">
                          
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
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <tr>
                        <td class="tg-0pky">JT-RI</td>
                        @if(isset($datos['simat']['dia1'][1]))                        
                        <td style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia1->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia1'][1]->dia_1 != 0 ? $datos['simat']['dia1'][1]->dia_1 +  $datos['simat']['dia1'][1]->dia_1observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia2->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia2'][1]->dia_2 != 0 ? $datos['simat']['dia2'][1]->dia_2 +  $datos['simat']['dia2'][1]->dia_2observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia3->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia3'][1]->dia_3 != 0 ? $datos['simat']['dia3'][1]->dia_3 +  $datos['simat']['dia3'][1]->dia_3observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia4->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia4'][1]->dia_4 != 0 ? $datos['simat']['dia4'][1]->dia_4 +  $datos['simat']['dia4'][1]->dia_4observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia5->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia5'][1]->dia_5 != 0 ? $datos['simat']['dia5'][1]->dia_5 +  $datos['simat']['dia5'][1]->dia_5observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia6->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia6'][1]->dia_6 != 0 ? $datos['simat']['dia6'][1]->dia_6 +  $datos['simat']['dia6'][1]->dia_6observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia7->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia7'][1]->dia_7 != 0 ? $datos['simat']['dia7'][1]->dia_7 +  $datos['simat']['dia7'][1]->dia_7observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia8->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia8'][1]->dia_8 != 0 ? $datos['simat']['dia8'][1]->dia_8 +  $datos['simat']['dia8'][1]->dia_8observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia9->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia9'][1]->dia_9 != 0 ? $datos['simat']['dia9'][1]->dia_9 +  $datos['simat']['dia9'][1]->dia_9observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia10->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia10'][1]->dia_10 != 0 ? $datos['simat']['dia10'][1]->dia_10 +  $datos['simat']['dia10'][1]->dia_10observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia11->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia11'][1]->dia_11 != 0 ? $datos['simat']['dia11'][1]->dia_11 +  $datos['simat']['dia11'][1]->dia_11observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia12->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia12'][1]->dia_12 != 0 ? $datos['simat']['dia12'][1]->dia_12 +  $datos['simat']['dia12'][1]->dia_12observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia13->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia13'][1]->dia_13 != 0 ? $datos['simat']['dia13'][1]->dia_13 +  $datos['simat']['dia13'][1]->dia_13observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia14->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia14'][1]->dia_14 != 0 ? $datos['simat']['dia14'][1]->dia_14 +  $datos['simat']['dia14'][1]->dia_14observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia15->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia15'][1]->dia_15 != 0 ? $datos['simat']['dia15'][1]->dia_15 +  $datos['simat']['dia15'][1]->dia_15observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia16->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia16'][1]->dia_16 != 0 ? $datos['simat']['dia16'][1]->dia_16 +  $datos['simat']['dia16'][1]->dia_16observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia17->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia17'][1]->dia_17 != 0 ? $datos['simat']['dia17'][1]->dia_17 +  $datos['simat']['dia17'][1]->dia_17observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia18->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia18'][1]->dia_18 != 0 ? $datos['simat']['dia18'][1]->dia_18 +  $datos['simat']['dia18'][1]->dia_18observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia19->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia19'][1]->dia_19 != 0 ? $datos['simat']['dia19'][1]->dia_19 +  $datos['simat']['dia19'][1]->dia_19observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia20->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia20'][1]->dia_20 != 0 ? $datos['simat']['dia20'][1]->dia_20 +  $datos['simat']['dia20'][1]->dia_20observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia21->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia21'][1]->dia_21 != 0 ? $datos['simat']['dia21'][1]->dia_21 +  $datos['simat']['dia21'][1]->dia_21observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia22->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia22'][1]->dia_22 != 0 ? $datos['simat']['dia22'][1]->dia_22 +  $datos['simat']['dia22'][1]->dia_22observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia23->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia23'][1]->dia_23 != 0 ? $datos['simat']['dia23'][1]->dia_23 +  $datos['simat']['dia23'][1]->dia_23observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia24->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia24'][1]->dia_24 != 0 ? $datos['simat']['dia24'][1]->dia_24 +  $datos['simat']['dia24'][1]->dia_24observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia25->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia25'][1]->dia_25 != 0 ? $datos['simat']['dia25'][1]->dia_25 +  $datos['simat']['dia25'][1]->dia_25observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia26->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia26'][1]->dia_26 != 0 ? $datos['simat']['dia26'][1]->dia_26 +  $datos['simat']['dia26'][1]->dia_26observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia27->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia27'][1]->dia_27 != 0 ? $datos['simat']['dia27'][1]->dia_27 +  $datos['simat']['dia27'][1]->dia_27observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia28->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia28'][1]->dia_28 != 0 ? $datos['simat']['dia28'][1]->dia_28 +  $datos['simat']['dia28'][1]->dia_28observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia29->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia29'][1]->dia_29 != 0 ? $datos['simat']['dia29'][1]->dia_29 +  $datos['simat']['dia29'][1]->dia_29observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia30->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia30'][1]->dia_30 != 0 ? $datos['simat']['dia30'][1]->dia_30 +  $datos['simat']['dia30'][1]->dia_30observacion : 0 : 0 }}</td>
                        <td style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};'>{{$datos['simat']->dia31->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia31'][1]->dia_31 != 0 ? $datos['simat']['dia31'][1]->dia_31 +  $datos['simat']['dia31'][1]->dia_31observacion : 0 : 0 }}</td>
                        <td class="tg-0pky">
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
                        <td class="tg-0pky">
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
                        <td class="tg-0pky">
                          
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
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
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
                        <td class="tg-0pky">0</td>
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
  <div class="modal modal-slide-in fade" id="modals-slide-in">
    <div class="modal-dialog sidebar-sm add-new-record modal-content pt-0">
      
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title" id="exampleModalLabel">Observaciones</h5>
        </div>
        <div class="modal-body flex-grow-1">
          <input type="hidden" id="estudiante-id">
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-fullname">Observaciones al estudiante</label>
            <textarea
              type="text"
              class="form-control dt-full-name"
              id="observaciones"
              name="observaciones"
              placeholder="Observaciones"
              aria-label="Observaciones"
            ></textarea>
          </div>
          <div class="mb-1">
            <div class="card">
              <div class="card-body">
                <h2 class="mb-75">Datos del estudiante en la base de datos</h2>
                 <p>             
                  <h5 class="mb-75">Institución:</h5>
                  <b class="card-text" id="institucion1"></b> sede <br>
                  <b class="card-text" id="sede1"></b>
                 </p>       
                <h2 class="mb-75">Primer coincidencia en el SIMAT</h2>
                
                <p>  
                  Documento: <b class="card-text" id="tipodocu"></b>
                  <b class="card-text" id="docu"></b><br>
                  <h5 class="mb-75">Nombre:</h5>
                  
                  <b class="card-text" id="primerNS"></b>
                  <b class="card-text" id="segundoNS"></b>
                  <b class="card-text" id="primerAS"></b>
                  <b class="card-text" id="segundoAS"></b>
                
                  <h5 class="mb-75">Institución:</h5>
                  <b class="card-text" id="institucionS"></b> sede <br>
                  <b class="card-text" id="sedeS"></b>
                </p>
                <p id="estadoS" class="badge rounded-pill badge-light-danger me-1"></p>
              </div>
            </div>
            
          </div>  
         
          <button class="btn btn-primary data-submit me-1" id="btn-save">Submit</button>
          <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      
    </div>
  </div>
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
  <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  
  <script type="text/javascript">
    $.fn.editable.defaults.mode = 'inline';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
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

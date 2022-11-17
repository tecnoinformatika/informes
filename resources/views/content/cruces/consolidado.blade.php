
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
            
            
            
                
            
                if($data[0]['simat']['dia1'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia2'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia3'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia4'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia5'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia6'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia7'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia8'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia9'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia10'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia11'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia12'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }

                if($data[0]['simat']['dia13'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia14'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia15'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia16'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia17'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia18'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia19'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia20'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia21'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia22'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia23'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia24'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia25'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia26'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia27'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia28'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia29'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia30'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }
                if($data[0]['simat']['dia31'][0]->habil != 'Z')
                {
                    $diashabiles += 1;
                }


                
                
            @endphp
         
         
          <div class="card-datatable">
            <table class="dt-complex-header table table-bordered table-responsive table-sm">
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
                  <th style="display: {{ $data[0]['simat']['dia1'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">1</th>
                  <th style="display: {{ $data[0]['simat']['dia2'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">2</th>
                  <th style="display: {{ $data[0]['simat']['dia3'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">3</th>
                  <th style="display: {{ $data[0]['simat']['dia4'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">4</th>
                  <th style="display: {{ $data[0]['simat']['dia5'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">5</th>
                  <th style="display: {{ $data[0]['simat']['dia6'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">6</th>
                  <th style="display: {{ $data[0]['simat']['dia7'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">7</th>
                  <th style="display: {{ $data[0]['simat']['dia8'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">8</th>
                  <th style="display: {{ $data[0]['simat']['dia9'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">9</th>
                  <th style="display: {{ $data[0]['simat']['dia10'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">10</th>
                  <th style="display: {{ $data[0]['simat']['dia11'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">11</th>
                  <th style="display: {{ $data[0]['simat']['dia12'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">12</th>
                  <th style="display: {{ $data[0]['simat']['dia13'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">13</th>
                  <th style="display: {{ $data[0]['simat']['dia14'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">14</th>
                  <th style="display: {{ $data[0]['simat']['dia15'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">15</th>
                  <th style="display: {{ $data[0]['simat']['dia16'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">16</th>
                  <th style="display: {{ $data[0]['simat']['dia17'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">17</th>
                  <th style="display: {{ $data[0]['simat']['dia18'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">18</th>
                  <th style="display: {{ $data[0]['simat']['dia19'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">19</th>
                  <th style="display: {{ $data[0]['simat']['dia20'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">20</th>
                  <th style="display: {{ $data[0]['simat']['dia21'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">21</th>
                  <th style="display: {{ $data[0]['simat']['dia22'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">22</th>
                  <th style="display: {{ $data[0]['simat']['dia23'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">23</th>
                  <th style="display: {{ $data[0]['simat']['dia24'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">24</th>
                  <th style="display: {{ $data[0]['simat']['dia25'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">25</th>
                  <th style="display: {{ $data[0]['simat']['dia26'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">26</th>
                  <th style="display: {{ $data[0]['simat']['dia27'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">27</th>
                  <th style="display: {{ $data[0]['simat']['dia28'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">28</th>
                  <th style="display: {{ $data[0]['simat']['dia29'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">29</th>
                  <th style="display: {{ $data[0]['simat']['dia30'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">30</th>
                  <th style="display: {{ $data[0]['simat']['dia31'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">31</th>
                </tr>
              </thead>
              <tbody>
                
               
               
                
                    
                    @foreach($data as $datos)
                  
                    <tr>                       
                        <td class="tg-lboi" rowspan="2">{{$datos['simat']->sede}}</td>
                        <td class="tg-0pky">JM-RI</td>
                        <td style="display: {{ $data[0]['simat']['dia1'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">{{$datos['simat']->dia1->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia1'][0]->dia_1 : $datos['simat']['dia1'][1]->dia_1 }}</td>
                        <td style="display: {{ $data[0]['simat']['dia2'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">2</td>
                        <td style="display: {{ $data[0]['simat']['dia3'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">3</td>
                        <td style="display: {{ $data[0]['simat']['dia4'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">4</td>
                        <td style="display: {{ $data[0]['simat']['dia5'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">5</td>
                        <td style="display: {{ $data[0]['simat']['dia6'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">6</td>
                        <td style="display: {{ $data[0]['simat']['dia7'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">7</td>
                        <td style="display: {{ $data[0]['simat']['dia8'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">8</td>
                        <td style="display: {{ $data[0]['simat']['dia9'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">9</td>
                        <td style="display: {{ $data[0]['simat']['dia10'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">10</td>
                        <td style="display: {{ $data[0]['simat']['dia11'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">11</td>
                        <td style="display: {{ $data[0]['simat']['dia12'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">12</td>
                        <td style="display: {{ $data[0]['simat']['dia13'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">13</td>
                        <td style="display: {{ $data[0]['simat']['dia14'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">14</td>
                        <td style="display: {{ $data[0]['simat']['dia15'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">15</td>
                        <td style="display: {{ $data[0]['simat']['dia16'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">{{$datos['simat']->dia16->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia16'][0]->dia_16 : $datos['simat']['dia16'][1]->dia_16 }}</td>
                        <td style="display: {{ $data[0]['simat']['dia17'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">17</td>
                        <td style="display: {{ $data[0]['simat']['dia18'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">18</td>
                        <td style="display: {{ $data[0]['simat']['dia19'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">19</td>
                        <td style="display: {{ $data[0]['simat']['dia20'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">20</td>
                        <td style="display: {{ $data[0]['simat']['dia21'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">21</td>
                        <td style="display: {{ $data[0]['simat']['dia22'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">22</td>
                        <td style="display: {{ $data[0]['simat']['dia23'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">23</td>
                        <td style="display: {{ $data[0]['simat']['dia24'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">24</td>
                        <td style="display: {{ $data[0]['simat']['dia25'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">25</td>
                        <td style="display: {{ $data[0]['simat']['dia26'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">26</td>
                        <td style="display: {{ $data[0]['simat']['dia27'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">27</td>
                        <td style="display: {{ $data[0]['simat']['dia28'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">28</td>
                        <td style="display: {{ $data[0]['simat']['dia29'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">{{$datos['simat']->dia29->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia29'][0]->dia_29 : $datos['simat']['dia29'][1]->dia_29 }}</td>
                        <td style="display: {{ $data[0]['simat']['dia30'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">30</td>
                        <td style="display: {{ $data[0]['simat']['dia31'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">31</td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <tr>
                        <td class="tg-0pky">JT-RI</td>
                        <td style="display: {{ $data[0]['simat']['dia1'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">1</td>
                        <td style="display: {{ $data[0]['simat']['dia2'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">2</td>
                        <td style="display: {{ $data[0]['simat']['dia3'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">3</td>
                        <td style="display: {{ $data[0]['simat']['dia4'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">4</td>
                        <td style="display: {{ $data[0]['simat']['dia5'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">5</td>
                        <td style="display: {{ $data[0]['simat']['dia6'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">6</td>
                        <td style="display: {{ $data[0]['simat']['dia7'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">7</td>
                        <td style="display: {{ $data[0]['simat']['dia8'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">8</td>
                        <td style="display: {{ $data[0]['simat']['dia9'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">9</td>
                        <td style="display: {{ $data[0]['simat']['dia10'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">10</td>
                        <td style="display: {{ $data[0]['simat']['dia11'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">11</td>
                        <td style="display: {{ $data[0]['simat']['dia12'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">12</td>
                        <td style="display: {{ $data[0]['simat']['dia13'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">13</td>
                        <td style="display: {{ $data[0]['simat']['dia14'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">14</td>
                        <td style="display: {{ $data[0]['simat']['dia15'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">15</td>
                        <td style="display: {{ $data[0]['simat']['dia16'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">{{$datos['simat']->dia16->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia16'][0]->dia_16 : $datos['simat']['dia16'][1]->dia_16 }}</td>
                        <td style="display: {{ $data[0]['simat']['dia17'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">17</td>
                        <td style="display: {{ $data[0]['simat']['dia18'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">18</td>
                        <td style="display: {{ $data[0]['simat']['dia19'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">19</td>
                        <td style="display: {{ $data[0]['simat']['dia20'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">20</td>
                        <td style="display: {{ $data[0]['simat']['dia21'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">21</td>
                        <td style="display: {{ $data[0]['simat']['dia22'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">22</td>
                        <td style="display: {{ $data[0]['simat']['dia23'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">23</td>
                        <td style="display: {{ $data[0]['simat']['dia24'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">24</td>
                        <td style="display: {{ $data[0]['simat']['dia25'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">25</td>
                        <td style="display: {{ $data[0]['simat']['dia26'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">26</td>
                        <td style="display: {{ $data[0]['simat']['dia27'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">27</td>
                        <td style="display: {{ $data[0]['simat']['dia28'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">28</td>
                        <td style="display: {{ $data[0]['simat']['dia29'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">29</td>
                        <td style="display: {{ $data[0]['simat']['dia30'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">30</td>
                        <td style="display: {{ $data[0]['simat']['dia31'][0]->habil != 'Z' ? 'table-cell' : 'none' }};">31</td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
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
@endsection
@section('page-script')
  {{-- Page js files --}}
  
  <script type="text/javascript">
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

@extends('layouts/contentLayoutMaster')

@section('title', 'Base de datos RPS')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">

  
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <style>
    table.dataTable tbody th, table.dataTable tbody td {
        padding: 8px 10px;
        text-transform: lowercase !important;
    }
  </style>
@endsection


@section('content')


<!-- Advanced Search -->
<section id="responsive-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Registros RPS</h4>
        </div>
        <div class="card-datatable">
     
          <table id="example" class="table-responsive">
              <thead>
                <tr role="row">
                  <th class="control sorting_asc" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                  <th>TIPO DE DOCUMENTO</th>
                  <th>DOCUMENTO_DE IDENTIDAD</th>
                  <th>PRIMER NOMBRE</th>
                  <th>SEGUNDO NOMBRE</th>
                  <th>PRIMER APELLIDO</th>
                  <th>SEGUNDO APELLIDO</th>
                  <th>FECHA DE NACIMIENTO</th>
                  <th>GRUPO ETARIO</th>
                  <th>PERTENENCIA ETNICA</th>
                  <th>SEXO</th>
                  <th>GRADO EDUCATIVO</th>
                  <th>dia_1</th>
                  <th>dia_2</th>
                  <th>dia_3</th>
                  <th>dia_4</th>
                  <th>dia_5</th>
                  <th>dia_6</th>
                  <th>dia_7</th>
                  <th>dia_8</th>
                  <th>dia_9</th>
                  <th>dia_10</th>
                  <th>dia_11</th>
                  <th>dia_12</th>
                  <th>dia_13</th>
                  <th>dia_14</th>
                  <th>dia_15</th>
                  <th>dia_16</th>
                  <th>dia_17</th>
                  <th>dia_18</th>
                  <th>dia_19</th>
                  <th>dia_20</th>
                  <th>dia_21</th>
                  <th>dia_22</th>
                  <th>dia_23</th>
                  <th>dia_24</th>
                  <th>dia_25</th>
                  <th>dia_26</th>
                  <th>dia_27</th>
                  <th>dia_28</th>
                  <th>dia_29</th>
                  <th>dia_30</th>
                  <th>dia_31</th>
                  <th>MODALIDAD</th>
                  <th>NO CLASES</th>
                  <th>NOVEDADES</th>
                  <th>TOTAL DIAS NO CONSUMO</th>
                  <th>SEDE</th>
                  <th>INSTITUCION</th>
                  <th>CODIGO DANE SEDE</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach($data as $datos)
                  <tr>
                  <th style="width: 0px; display: none;">{{$datos->id}}</th>
                  <th>{{$datos->TIPO_DE_DOCUMENTO}}</th>
                  <th>{{$datos->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD}}</th>
                  <th>{{$datos->PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO}}</th>
                  <th>{{$datos->SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO}}</th>
                  <th>{{$datos->PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO}}</th>
                  <th>{{$datos->SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO}}</th>
                  <th>{{$datos->FECHA_DE_NACIMIENTO}}</th>
                  <th>{{$datos->GRUPO_ETARIO}}</th>
                  <th>{{$datos->PERTENENCIA_ETNICA}}</th>
                  <th>{{$datos->Sexo}}</th>
                  <th>{{$datos->Grado_Educativo}}</th>
                  <th {{ $datos->dia_1 = "Z" ? 'style="background-color: #df1717;    color: #fff;    font-weight: 700;"' : '' }}>{{$datos->dia_1}}</th>
                  <th>{{$datos->dia_2}}</th>
                  <th>{{$datos->dia_3}}</th>
                  <th>{{$datos->dia_4}}</th>
                  <th>{{$datos->dia_5}}</th>
                  <th>{{$datos->dia_6}}</th>
                  <th>{{$datos->dia_7}}</th>
                  <th>{{$datos->dia_8}}</th>
                  <th>{{$datos->dia_9}}</th>
                  <th>{{$datos->dia_10}}</th>
                  <th>{{$datos->dia_11}}</th>
                  <th>{{$datos->dia_12}}</th>
                  <th>{{$datos->dia_13}}</th>
                  <th>{{$datos->dia_14}}</th>
                  <th>{{$datos->dia_15}}</th>
                  <th>{{$datos->dia_16}}</th>
                  <th>{{$datos->dia_17}}</th>
                  <th>{{$datos->dia_18}}</th>
                  <th>{{$datos->dia_19}}</th>
                  <th>{{$datos->dia_20}}</th>
                  <th>{{$datos->dia_21}}</th>
                  <th>{{$datos->dia_22}}</th>
                  <th>{{$datos->dia_23}}</th>
                  <th>{{$datos->dia_24}}</th>
                  <th>{{$datos->dia_25}}</th>
                  <th>{{$datos->dia_26}}</th>
                  <th>{{$datos->dia_27}}</th>
                  <th>{{$datos->dia_28}}</th>
                  <th>{{$datos->dia_29}}</th>
                  <th>{{$datos->dia_30}}</th>
                  <th>{{$datos->dia_31}}</th>
                  <th>{{$datos->MODALIDAD}}</th>
                  <th>{{$datos->NO_CLASES}}</th>
                  <th>{{$datos->NOVEDADES}}</th>
                  <th>{{$datos->TOTAL_DIAS_NO_CONSUMO}}</th>
                  <th>{{$datos->SEDE}}</th>
                  <th>{{$datos->INSTITUCION}}</th>
                  <th>{{$datos->codigo_dane_sede}}</th>

                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr role="row">
                  <th class="control sorting_disabled sorting_asc" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                  <th>TIPO DE DOCUMENTO</th>
                  <th>DOCUMENTO_DE IDENTIDAD</th>
                  <th>PRIMER NOMBRE</th>
                  <th>SEGUNDO NOMBRE</th>
                  <th>PRIMER APELLIDO</th>
                  <th>SEGUNDO APELLIDO</th>
                  <th>FECHA DE NACIMIENTO</th>
                  <th>GRUPO ETARIO</th>
                  <th>PERTENENCIA ETNICA</th>
                  <th>SEXO</th>
                  <th>GRADO EDUCATIVO</th>
                  <th>dia_1</th>
                  <th>dia_2</th>
                  <th>dia_3</th>
                  <th>dia_4</th>
                  <th>dia_5</th>
                  <th>dia_6</th>
                  <th>dia_7</th>
                  <th>dia_8</th>
                  <th>dia_9</th>
                  <th>dia_10</th>
                  <th>dia_11</th>
                  <th>dia_12</th>
                  <th>dia_13</th>
                  <th>dia_14</th>
                  <th>dia_15</th>
                  <th>dia_16</th>
                  <th>dia_17</th>
                  <th>dia_18</th>
                  <th>dia_19</th>
                  <th>dia_20</th>
                  <th>dia_21</th>
                  <th>dia_22</th>
                  <th>dia_23</th>
                  <th>dia_24</th>
                  <th>dia_25</th>
                  <th>dia_26</th>
                  <th>dia_27</th>
                  <th>dia_28</th>
                  <th>dia_29</th>
                  <th>dia_30</th>
                  <th>dia_31</th>
                  <th>MODALIDAD</th>
                  <th>NO CLASES</th>
                  <th>NOVEDADES</th>
                  <th>TOTAL DIAS NO CONSUMO</th>
                  <th>SEDE</th>
                  <th>INSTITUCION</th>
                  <th>CODIGO DANE SEDE</th>
                </tr>
              </tfoot>
              
            
          
          </table>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Advanced Search -->

@endsection


@section('vendor-script')
{{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  {{-- Page js files --}}
  <script>
    $(document).ready(function () {
        // Setup - add a text input to each footer cell
        $('#example tfoot th').each(function () {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Search ' + title + '" />');
        });
    
        // DataTable
        var table = $('#example').DataTable({
            initComplete: function () {
                // Apply the search
                this.api()
                    .columns()
                    .every(function () {
                        var that = this;
    
                        $('input', this.footer()).on('keyup change clear', function () {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
            },
        });
    });
  </script>
  <!--<script src="{{ asset(mix('js/scripts/tables/table-datatables-advanced.js')) }}"></script>-->
@endsection
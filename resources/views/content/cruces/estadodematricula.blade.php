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
    table.dataTable thead th {
        padding: 8px 10px;
        text-transform: uppercase !important;
    }
    table.dataTable tbody th, table.dataTable tbody td {
        padding: 0px 0px;
        border-style: solid;
        border-width: 1px;
        border-color: #000;
    }
    .table-hover > tbody > tr:hover > td
    {
      color: #000;
    }
  </style>
@endsection


@section('content')


<!-- Advanced Search -->
<section id="responsive-datatable">
  <div class="row" id="app">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Registros RPS</h4>
        </div>
        <div class="table-responsive">
     
          <table id="example" class="table-responsive table table-sm table-hover">

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
                  <th>MODALIDAD</th>
                  <th>NO CLASES</th>
                  <th>NOVEDADES</th>
                  <th>TOTAL DIAS NO CONSUMO</th>
                  <th style="min-width: 300px">NOMBRE DE LA SEDE EDUCATIVA</th>
                  <th style="min-width: 300px">INSTITUCION</th>
                  <th>CODIGO DANE SEDE</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody id="tablebody">
               
                  
                
              </tbody>
              
              
            
          
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
  <script>
    $(document).ready( function () {
        $.ajax({
                  url: "/cruces/estado-matriculaJson/",
                  type: "GET",
                  cache: true,
                  success: function(response){
                      $.each(response, function (key, value) {
                          $('#tablebody').append("<tr>\
                                      <td>"+value.column1+"</td>\
                                      <td>"+value.column2y+"</td>\
                                      <td>"+value.column3+"</td>\
                                      </tr>");
                                      
                      })
                  }

        });
    });
</script>

@endsection
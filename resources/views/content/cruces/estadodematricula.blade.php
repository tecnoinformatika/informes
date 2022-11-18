﻿
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
<section class="bootstrap-select">
  <form action="/cruces/estado-matriculaJson/" method="GET">
  <div class="row">
    
      <div class="col-md-6 col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Institución</h4>
          </div>
          <div class="card-body">
            <!-- Basic Select -->
            <div class="mb-1">
              <label class="form-label" for="institucion">Institución</label>
              <select class="form-select" id="institucion" name="institucion">
                <option value="">- Seleccione -</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Tipo de complemento</h4>
          </div>
          <div class="card-body">
            <!-- Basic Select -->
            <div class="mb-1">
              <label class="form-label" for="tipo">Tipo de complemento</label>
              <select class="form-select" id="tipo" name="tipo">
                <option value="">- Seleccione -</option>
                <option value="RPS">RPS</option>
                <option value="RI">RI</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-12">
        <div class="card">
          <div class="card-header">
          </div>
          <div class="card-body">
            <!-- Basic Select -->
            <div class="mb-1">
              <button type="submit" class="btn btn-primary waves-effect waves-float waves-light"  value="Filtrar">Filtrar</button>
            </div>
          </div>
        </div>
      </div>
    
  </div>
</form>
</section>
<section>
  @if (isset($_GET['tipo']))
  <input type="hidden" id="tipo1" value="{{$_GET['tipo']}}">
  @endif
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
  <p id="msg">{{ $message }}</p>
  </div>
  @endif

  <div class="row" id="table-hover-row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Datos consultados</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            @if (isset($data))
              <h1>TIPO DE COMPLEMENTO <span class="badge rounded-pill badge-light-success me-1">{{$data[0]->tipoComplemento}}</span></h1>
              <h2>INSTITUCIÓN Y  SEDE ECUACTIVA: {{$data[0]->insti}} ---- {{$data[0]->sed}}         
            @endif.
          </p>
        </div>
        <div class="table-responsive">
          <table class="table table-hover table-sm table-responsive" id="example">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tipo de documento</th>
                <th>Documento</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Fecha de nacimiento</th>
                <th>Sexo</th>                
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @if (isset($data))
              @foreach($data as $datos)
              <tr>
                <td>
                  {{$datos->N}}
                </td>
                <td> 
                  {{$datos->tipodoc}}</td>
                <td>
                  {{$datos->numdoc}}
                </td>
                <td>
                  {{$datos->PrimerNombre}}
                </td>
                <td>
                  {{$datos->SegundoNombre}}
                </td>
                <td>
                  {{$datos->PrimerApellido}}
                </td>
                <td>
                  {{$datos->SegundoApellido}}
                </td>
                <td>
                  {{$datos->fechaNacimiento}}
                </td>
                <td>
                  {{$datos->sexo}}
                </td>
                
                  @if($datos->estado == "MATRICULADO")
                    <td><span class="badge rounded-pill badge-light-success me-1">{{$datos->estado}}</span></td>
                    
                  @elseif($datos->estado == "RETIRADO")
                  <td><span class="badge rounded-pill badge-light-danger me-1">{{$datos->estado}}</span></td>
            
                  @elseif($datos->estado == "GRADUADO")
                  <td><span class="badge rounded-pill badge-light-warning me-1">{{$datos->estado}}</span></td>
                  
                  @elseif ($datos->estado == null)
                  <td><span class="badge rounded-pill badge-light-secondary me-1"> No coincide</span></td>
              
                  @endif
                  <td>
                  
                    <a href="javascript:void(0)" class="dropdown-item" id="edit-customer" data-bs-toggle="modal" data-bs-target="#modals-slide-in" data-id="{{ $datos->N }}">
                      <i data-feather="edit-2" class="me-50"></i>
                      <span>Editar</span> 
                    </a>
                      
                      
                
                </td>
              </tr>
              @endforeach
            @endif
            </tbody>
          </table>
        </div>
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
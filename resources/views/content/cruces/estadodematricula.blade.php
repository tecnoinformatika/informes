
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
              <select class="form-select" id="institucion">
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
              <label class="form-label" for="tipodecomplemento">Tipo de complemento</label>
              <select class="form-select" id="tipodecomplemento">
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
              <button onclick="filtrar()" class="btn btn-primary waves-effect waves-float waves-light" id="filtrar1" value="Filtrar">Filtrar</button>
            </div>
          </div>
        </div>
      </div>
    
  </div>

</section>

<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="table-responsive">
   
                 
          <table class="datatables-basic table-responsive table table-sm table-bordered table-hover">


            <thead>
              <tr>
                <th></th>
                <th>N°</th>
                <th>Tipo documento</th>
                <th>Documento</th>
                <th>Primer nombre</th>
                <th>Segundo nombre</th>
                <th>Primer apellido</th>
                <th>Segundo apellido</th>
                <th>fecha de nacimiento</th>
                <th>Sexo</th>
                <th>Modalidad</th>
                <th style="min-width: 300px">Institución</th>
                <th style="min-width: 300px">Sede educativa</th>
                <th>Estado</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal to add new record -->
  <div class="modal modal-slide-in fade" id="modals-slide-in">
    <div class="modal-dialog sidebar-sm">
      <form class="add-new-record modal-content pt-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
        </div>
        <div class="modal-body flex-grow-1">
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
            <input
              type="text"
              class="form-control dt-full-name"
              id="basic-icon-default-fullname"
              placeholder="John Doe"
              aria-label="John Doe"
            />
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-post">Post</label>
            <input
              type="text"
              id="basic-icon-default-post"
              class="form-control dt-post"
              placeholder="Web Developer"
              aria-label="Web Developer"
            />
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-email">Email</label>
            <input
              type="text"
              id="basic-icon-default-email"
              class="form-control dt-email"
              placeholder="john.doe@example.com"
              aria-label="john.doe@example.com"
            />
            <small class="form-text"> You can use letters, numbers & periods </small>
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-date">Joining Date</label>
            <input
              type="text"
              class="form-control dt-date"
              id="basic-icon-default-date"
              placeholder="MM/DD/YYYY"
              aria-label="MM/DD/YYYY"
            />
          </div>
          <div class="mb-4">
            <label class="form-label" for="basic-icon-default-salary">Salary</label>
            <input
              type="text"
              id="basic-icon-default-salary"
              class="form-control dt-salary"
              placeholder="$12000"
              aria-label="$12000"
            />
          </div>
          <button type="button" class="btn btn-primary data-submit me-1">Submit</button>
          <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
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
    });
    
    var institucion = '';
    var tipodecomplemento = '';
    
    $('#filtrar1').hide();
    $("#institucion").change(function(){
        var institucion = $(this).val();
    
    });
    
    $("#tipodecomplemento").change(function(){
        var tipodecomplemento = $(this).val();
        
       
            $('#filtrar1').show();
          
        
    });

    $( "#filtrar1" ).click(function() {
      'use strict';
      console.log('cruces/estado-matriculaJson/'+ $("#institucion").val() + '/' + $("#tipodecomplemento").val());

      var dt_basic_table = $('.datatables-basic'),
        dt_date_table = $('.dt-date'),
        dt_complex_header_table = $('.dt-complex-header'),
        dt_row_grouping_table = $('.dt-row-grouping'),
        dt_multilingual_table = $('.dt-multilingual'),
        assetPath = '../../../app-assets/';


            if ($('body').attr('data-framework') === 'laravel') {
              assetPath = $('body').attr('data-asset-path');
            }

            // DataTable with buttons
            // --------------------------------------------------------------------
            
            if (dt_basic_table.length) {
                
              var dt_basic = dt_basic_table.DataTable({     
                ajax: assetPath + 'cruces/estado-matriculaJson/'+ $("#institucion").val() + '/' + $("#tipodecomplemento").val(),
                
                columns: [
                  { data: '0' },
                  { data: '0' },        
                  { data: '1' },
                  { data: '2' },
                  { data: '3' },
                  { data: '4' },
                  { data: '5' },
                  { data: '6' },
                  { data: '7' },
                  { data: '8' },
                  { data: '9' },
                  { data: '10' },
                  { data: '11' },
                  { data: '12' },
                  { data: '' }
                ],
                columnDefs: [
                  {
                    // For Responsive
                    className: 'control',
                    orderable: false,
                    responsivePriority: 2,
                    targets: 0
                  },
                  {
                    // For Checkboxes
                    targets: 1,
                    orderable: false,
                    responsivePriority: 3,
                    render: function (data, type, full, meta) {
                      return (
                        '<div class="form-check"> <input class="form-check-input dt-checkboxes" type="checkbox" value="" id="checkbox' +
                        data +
                        '" /><label class="form-check-label" for="checkbox' +
                        data +
                        '"></label></div>'
                      );
                    },
                    checkboxes: {
                      selectAllRender:
                        '<div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="checkboxSelectAll" /><label class="form-check-label" for="checkboxSelectAll"></label></div>'
                    }
                  },
                  {
                    targets: 2,
                    visible: false
                  },
                  
                  {
                    responsivePriority: 1,
                    targets: 4
                  },
                  {
                    // Label
                    targets: 13,
                    render: function (data, type, full, meta) {
                      var $status_number = full[12];
                      var $status = {
                        'MATRICULADO': { title: 'MATRICULADO', class: 'badge-light-primary' },
                        'RETIRADO': { title: 'RETIRADO', class: ' badge-light-danger' }
                      };
                      if (typeof $status[$status_number] === 'undefined') {
                        return data;
                      }
                      return (
                        '<span class="badge rounded-pill ' +
                        $status[$status_number].class +
                        '">' +
                        $status[$status_number].title +
                        '</span>'
                      );
                    }
                  },
                  {
                    // Actions
                    targets: 14,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, full, meta) {
                      return (
                        '<div class="d-inline-flex">' +
                        '<a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown">' +
                        feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
                        '</a>' +
                        '<div class="dropdown-menu dropdown-menu-end">' +
                        '<a href="javascript:;" class="dropdown-item">' +
                        feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) +
                        'Details</a>' +
                        '<a href="javascript:;" class="dropdown-item">' +
                        feather.icons['archive'].toSvg({ class: 'font-small-4 me-50' }) +
                        'Archive</a>' +
                        '<a href="javascript:;" class="dropdown-item delete-record">' +
                        feather.icons['trash-2'].toSvg({ class: 'font-small-4 me-50' }) +
                        'Delete</a>' +
                        '</div>' +
                        '</div>' +
                        '<a href="javascript:;" class="item-edit">' +
                        feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
                        '</a>'
                      );
                    }
                  }
                ],
                order: [[2, 'desc']],
                dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                displayLength: 7,
                lengthMenu: [7, 10, 25, 50, 75, 100],
                buttons: [
                  {
                    extend: 'collection',
                    className: 'btn btn-outline-secondary dropdown-toggle me-2',
                    text: feather.icons['share'].toSvg({ class: 'font-small-4 me-50' }) + 'Export',
                    buttons: [
                      {
                        extend: 'print',
                        text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
                        className: 'dropdown-item',
                        exportOptions: { columns: [2,3, 4, 5, 6, 7,8,9,10,11,12] }
                      },
                      {
                        extend: 'csv',
                        text: feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) + 'Csv',
                        className: 'dropdown-item',
                        exportOptions: { columns: [2,3, 4, 5, 6, 7,8,9,10,11,12] }
                      },
                      {
                        extend: 'excel',
                        text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
                        className: 'dropdown-item',
                        exportOptions: { columns: [2,3, 4, 5, 6, 7,8,9,10,11,12,13] }
                      },
                      {
                        extend: 'pdf',
                        text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf',
                        className: 'dropdown-item',
                        exportOptions: { columns: [2,3, 4, 5, 6, 7,8,9,10,11,12] }
                      },
                      {
                        extend: 'copy',
                        text: feather.icons['copy'].toSvg({ class: 'font-small-4 me-50' }) + 'Copy',
                        className: 'dropdown-item',
                        exportOptions: { columns: [2,3, 4, 5, 6, 7,8,9,10,11,12] }
                      }
                    ],
                    init: function (api, node, config) {
                      $(node).removeClass('btn-secondary');
                      $(node).parent().removeClass('btn-group');
                      setTimeout(function () {
                        $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
                      }, 50);
                    }
                  },
                  {
                    text: feather.icons['plus'].toSvg({ class: 'me-50 font-small-4' }) + 'Add New Record',
                    className: 'create-new btn btn-primary',
                    attr: {
                      'data-bs-toggle': 'modal',
                      'data-bs-target': '#modals-slide-in'
                    },
                    init: function (api, node, config) {
                      $(node).removeClass('btn-secondary');
                    }
                  }
                ],
                responsive: {
                  details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                      header: function (row) {
                        var data = row.data();
                        return 'Details of ' + data['PrimerNombre'];
                      }
                    }),
                    type: 'column',
                    renderer: function (api, rowIdx, columns) {
                      var data = $.map(columns, function (col, i) {
                        return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                          ? '<tr data-dt-row="' +
                              col.rowIdx +
                              '" data-dt-column="' +
                              col.columnIndex +
                              '">' +
                              '<td>' +
                              col.title +
                              ':' +
                              '</td> ' +
                              '<td>' +
                              col.data +
                              '</td>' +
                              '</tr>'
                          : '';
                      }).join('');

                      return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
                    }
                  }
                },
                language: {
                  paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                  }
                }
              });
              $('div.head-label').html('<h2 class="mb-0">Estado de matrícula estudiantes reportados vs SIMAT</h2>');
            }

            // Flat Date picker
            if (dt_date_table.length) {
              dt_date_table.flatpickr({
                monthSelectorType: 'static',
                dateFormat: 'm/d/Y'
              });
            }

            // Add New record
            // ? Remove/Update this code as per your requirements ?
            var count = 101;
            $('.data-submit').on('click', function () {
              var $new_name = $('.add-new-record .dt-full-name').val(),
                $new_post = $('.add-new-record .dt-post').val(),
                $new_email = $('.add-new-record .dt-email').val(),
                $new_date = $('.add-new-record .dt-date').val(),
                $new_salary = $('.add-new-record .dt-salary').val();

              if ($new_name != '') {
                dt_basic.row
                  .add({
                    responsive_id: null,
                    id: count,
                    full_name: $new_name,
                    post: $new_post,
                    email: $new_email,
                    start_date: $new_date,
                    salary: '$' + $new_salary,
                    status: 5
                  })
                  .draw();
                count++;
                $('.modal').modal('hide');
              }
            });

            // Delete Record
            $('.datatables-basic tbody').on('click', '.delete-record', function () {
              dt_basic.row($(this).parents('tr')).remove().draw();
            });

      // Complex Header DataTable
      // --------------------------------------------------------------------



      // Row Grouping
      // --------------------------------------------------------------------

      
    });
    </script>

    <script src="{{ asset(mix('js/scripts/tables/table-datatables-basic-estadomatricula.js')) }}"></script>
@endsection

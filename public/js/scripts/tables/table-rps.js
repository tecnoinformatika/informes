/**
 * DataTables Advanced
 */

 'use strict';

 $(function () {
   var isRtl = $('html').attr('data-textdirection') === 'rtl';
 
   var dt_ajax_table = $('.datatables-ajax'),
     dt_filter_table = $('.dt-column-search'),
     dt_adv_filter_table = $('.dt-advanced-search'),
     dt_responsive_table = $('.dt-responsive'),
     assetPath = '../../../app-assets/';
 
   if ($('body').attr('data-framework') === 'laravel') {
     assetPath = $('body').attr('data-asset-path');
   }
 
   // Advanced Search Functions Starts
   // --------------------------------------------------------------------
 
   // Filter column wise function
   function filterColumn(i, val) {
     if (i == 5) {
       var startDate = $('.start_date').val(),
         endDate = $('.end_date').val();
       if (startDate !== '' && endDate !== '') {
         $.fn.dataTableExt.afnFiltering.length = 0; // Reset datatable filter
         dt_adv_filter_table.dataTable().fnDraw(); // Draw table after filter
         filterByDate(i, startDate, endDate); // We call our filter function
       }
 
       $('.dt-advanced-search').dataTable().fnDraw();
     } else {
       $('.dt-advanced-search').DataTable().column(i).search(val, false, true).draw();
     }
   }
 
   // Datepicker for advanced filter
   var separator = ' - ',
     rangePickr = $('.flatpickr-range'),
     dateFormat = 'MM/DD/YYYY';
   var options = {
     autoUpdateInput: false,
     autoApply: true,
     locale: {
       format: dateFormat,
       separator: separator
     },
     opens: $('html').attr('data-textdirection') === 'rtl' ? 'left' : 'right'
   };
 
   //
   if (rangePickr.length) {
     rangePickr.flatpickr({
       mode: 'range',
       dateFormat: 'm/d/Y',
       onClose: function (selectedDates, dateStr, instance) {
         var startDate = '',
           endDate = new Date();
         if (selectedDates[0] != undefined) {
           startDate =
             selectedDates[0].getMonth() + 1 + '/' + selectedDates[0].getDate() + '/' + selectedDates[0].getFullYear();
           $('.start_date').val(startDate);
         }
         if (selectedDates[1] != undefined) {
           endDate =
             selectedDates[1].getMonth() + 1 + '/' + selectedDates[1].getDate() + '/' + selectedDates[1].getFullYear();
           $('.end_date').val(endDate);
         }
         $(rangePickr).trigger('change').trigger('keyup');
       }
     });
   }
 
   // Advance filter function
   // We pass the column location, the start date, and the end date
   var filterByDate = function (column, startDate, endDate) {
     // Custom filter syntax requires pushing the new filter to the global filter array
     $.fn.dataTableExt.afnFiltering.push(function (oSettings, aData, iDataIndex) {
       var rowDate = normalizeDate(aData[column]),
         start = normalizeDate(startDate),
         end = normalizeDate(endDate);
 
       // If our date from the row is between the start and end
       if (start <= rowDate && rowDate <= end) {
         return true;
       } else if (rowDate >= start && end === '' && start !== '') {
         return true;
       } else if (rowDate <= end && start === '' && end !== '') {
         return true;
       } else {
         return false;
       }
     });
   };
 
   // converts date strings to a Date object, then normalized into a YYYYMMMDD format (ex: 20131220). Makes comparing dates easier. ex: 20131220 > 20121220
   var normalizeDate = function (dateString) {
     var date = new Date(dateString);
     var normalized =
       date.getFullYear() + '' + ('0' + (date.getMonth() + 1)).slice(-2) + '' + ('0' + date.getDate()).slice(-2);
     return normalized;
   };
   // Advanced Search Functions Ends
 
   // Ajax Sourced Server-side
   // --------------------------------------------------------------------
 
   if (dt_ajax_table.length) {
     var dt_ajax = dt_ajax_table.dataTable({
       processing: true,
       dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
       ajax: assetPath + 'data/ajax.php',
       language: {
         paginate: {
           // remove previous & next text from pagination
           previous: '&nbsp;',
           next: '&nbsp;'
         }
       }
     });
   }
 
   // Column Search
   // --------------------------------------------------------------------
 
   if (dt_filter_table.length) {
     // Setup - add a text input to each footer cell
     $('.dt-column-search thead tr').clone(true).appendTo('.dt-column-search thead');
     $('.dt-column-search thead tr:eq(1) th').each(function (i) {
       var title = $(this).text();
       $(this).html('<input type="text" class="form-control form-control-sm" placeholder="Search ' + title + '" />');
 
       $('input', this).on('keyup change', function () {
         if (dt_filter.column(i).search() !== this.value) {
           dt_filter.column(i).search(this.value).draw();
         }
       });
     });
 
     var dt_filter = dt_filter_table.DataTable({
       ajax: assetPath + 'rps/tabla',
       columns: [
        'id',
        'TIPO_DE_DOCUMENTO',
        'NUMERO_DE_DOCUMENTO_DE_IDENTIDAD',
        'PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO',
        'SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO',
        'PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO',
        'SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO',
        'FECHA_DE_NACIMIENTO',
        'GRUPO_ETARIO',
        'PERTENENCIA_ETNICA',
        'Sexo',
        'Grado_Educativo',
        'Tipo_de_complemento',
        'dia_1',
        'dia_2',
        'dia_3',
        'dia_4',
        'dia_5',
        'dia_6',
        'dia_7',
        'dia_8',
        'dia_9',
        'dia_10',
        'dia_11',
        'dia_12',
        'dia_13',
        'dia_14',
        'dia_15',
        'dia_16',
        'dia_17',
        'dia_18',
        'dia_19',
        'dia_20',
        'dia_21',
        'dia_22',
        'dia_23',
        'dia_24',
        'dia_25',
        'dia_26',
        'dia_27',
        'dia_28',
        'dia_29',
        'dia_30',
        'dia_31',
        'MODALIDAD',
        'NO_CLASES',
        'NOVEDADES',
        'TOTAL_DIAS_NO_CONSUMO',
        'SEDE',
        'INSTITUCION',
        'SUPERVISOR_OPERDOR'
       ],
       dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
       orderCellsTop: true,
       language: {
         paginate: {
           // remove previous & next text from pagination
           previous: '&nbsp;',
           next: '&nbsp;'
         }
       }
     });
   }
 
   // Advanced Search
   // --------------------------------------------------------------------
 
   // Advanced Filter table
   if (dt_adv_filter_table.length) {
     var dt_adv_filter = dt_adv_filter_table.DataTable({
       ajax: assetPath + 'rps/tabla',
       columns: [
         'id',
         'TIPO_DE_DOCUMENTO',
         'NUMERO_DE_DOCUMENTO_DE_IDENTIDAD',
         'PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO',
         'SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO',
         'PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO',
         'SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO',
         'FECHA_DE_NACIMIENTO',
         'GRUPO_ETARIO',
         'PERTENENCIA_ETNICA',
         'Sexo',
         'Grado_Educativo',
         'Tipo_de_complemento',
         'dia_1',
         'dia_2',
         'dia_3',
         'dia_4',
         'dia_5',
         'dia_6',
         'dia_7',
         'dia_8',
         'dia_9',
         'dia_10',
         'dia_11',
         'dia_12',
         'dia_13',
         'dia_14',
         'dia_15',
         'dia_16',
         'dia_17',
         'dia_18',
         'dia_19',
         'dia_20',
         'dia_21',
         'dia_22',
         'dia_23',
         'dia_24',
         'dia_25',
         'dia_26',
         'dia_27',
         'dia_28',
         'dia_29',
         'dia_30',
         'dia_31',
         'MODALIDAD',
         'NO_CLASES',
         'NOVEDADES',
         'TOTAL_DIAS_NO_CONSUMO',
         'SEDE',
         'INSTITUCION',
         'SUPERVISOR_OPERDOR'
       ],
       
       columnDefs: [
         {
           className: 'control',
           orderable: false,
           targets: 0
         }
       ],
       dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
       orderCellsTop: true,
       responsive: {
         details: {
           display: $.fn.dataTable.Responsive.display.modal({
             header: function (row) {
               var data = row.data();
               return 'Details of ' + 'NUMERO_DE_DOCUMENTO_DE_IDENTIDAD';
             }
           }),
           type: 'column',
           renderer: function (api, rowIdx, columns) {
             var data = $.map(columns, function (col, i) {
               return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                 ? '<tr data-dt-row="' +
                     col.rowIndex +
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
 
             return data ? $('<table class="table"/><tbody />').append(data) : false;
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
   }
 
   // on key up from input field
   $('input.dt-input').on('keyup', function () {
     filterColumn($(this).attr('data-column'), $(this).val());
   });
 


 
   // Filter form control to default size for all tables
   $('.dataTables_filter .form-control').removeClass('form-control-sm');
   $('.dataTables_length .form-select').removeClass('form-select-sm').removeClass('form-control-sm');
 });
 
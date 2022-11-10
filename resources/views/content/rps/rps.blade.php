@extends('layouts/contentLayoutMaster')

@section('title', 'Base de datos RPS')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
@endsection


@section('content')


<!-- Advanced Search -->
<section id="responsive-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Responsive Datatable</h4>
        </div>
        <div class="card-datatable">
          <div id="DataTables_Table_3_wrapper" class="dataTables_wrapper dt-bootstrap5"><div class="d-flex justify-content-between align-items-center mx-0 row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_3_length"><label>Show <select name="DataTables_Table_3_length" aria-controls="DataTables_Table_3" class="form-select"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_3_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_3"></label></div></div></div><table class="dt-responsive table dataTable dtr-column" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info" style="width: 1429px;">
            <thead>
              <tr role="row"><th class="control sorting_disabled sorting_asc" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 110px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 236px;" aria-label="Email: activate to sort column ascending">Email</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 171px;" aria-label="Post: activate to sort column ascending">Post</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 130px;" aria-label="City: activate to sort column ascending">City</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 66px;" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 62px;" aria-label="Salary: activate to sort column ascending">Salary</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 28px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 85px;" aria-label="Experience: activate to sort column ascending">Experience</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 82px;" aria-label="Status: activate to sort column ascending">Status</th></tr>
            </thead>
            <tfoot>
              <tr><th class="control" rowspan="1" colspan="1" style="display: none;"></th><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Post</th><th rowspan="1" colspan="1">City</th><th rowspan="1" colspan="1" style="">Date</th><th rowspan="1" colspan="1" style="">Salary</th><th rowspan="1" colspan="1" style="">Age</th><th rowspan="1" colspan="1" style="">Experience</th><th rowspan="1" colspan="1" style="">Status</th></tr>
            </tfoot>
          <tbody>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            <tr class="odd"><td class="control sorting_1" tabindex="0" style="display: none;"></td>
              <td>Korrie O'Crevy</td><td>kocrevy0@thetimes.co.uk</td>
              <td>Nuclear Power Engineer</td>
              <td>Krasnosilka</td>
              <td style="">09/23/2016</td>
              <td style="">$23896.35</td>
              <td style="">61</td>
              <td style="">1 Year</td>
              <td style=""><span class="badge rounded-pill  badge-light-success">Professional</span></td>
            </tr>
            
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
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/tables/table-rps.js')) }}"></script>
@endsection
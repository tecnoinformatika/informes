@extends('layouts/contentLayoutMaster')

@section('title', 'Certificaciones')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
@endsection
@section('page-style')
<link rel="stylesheet" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" href="{{asset('css/base/pages/app-invoice.css')}}">
<style type="text/css">
  .tg  {border-collapse:collapse;border-spacing:0;}
  .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
    overflow:hidden;padding:10px 5px;word-break:normal;}
  .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
    font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
  .tg .tg-cly1{text-align:left;vertical-align:middle}
  .tg .tg-0lax{text-align:left;vertical-align:top}
</style>
@endsection

@section('content')
<section class="invoice-preview-wrapper">
  <div class="row invoice-preview">
    <!-- Invoice -->
    <div class="col-xl-9 col-md-8 col-12">
      <div class="card invoice-preview-card">
        <div class="card-body invoice-padding pb-0">
          <!-- Header starts -->
          <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
            
            <div class="mt-md-0 mt-2">
              
            </div>
            <div>
              <div class="logo-wrapper">
                <img src="/storage/sec.jpg" alt="">
                
              </div>
              
            </div>
          </div>
          <!-- Header ends -->
        </div>

        <hr class="invoice-spacing" />

        <!-- Address and Contact starts -->
        <div class="card-body invoice-padding pt-0">
          <h3>CONSTANCIA DE VERIFICACION PLANILLAS NIÑO A NIÑO Y SOPORTE MAGNETICO PAE 2022</h3>
          <div class="row invoice-spacing">
            <div class="col-xl-12 p-0">
              
              <p style="text-align: justify">La Institución Educativa: {{$data[0]['simat']->institucion}} 
                y su sede:
                @foreach($data as $datos) 
                {{$datos['simat']->sede}}, 
                @endforeach
                 pertenecientes a la COMUNA 1 realizo la entrega 
                del complemento alimentario en sus dos modalidades RI y RPS que contemplo un periodo de 
                cobertura de 18 días calendario escolar desde el 05 DE JULIO AL 29 DE JULIO DE 2022 se 
                registró una atención total de 22.440 (VEINTIDOS MIL CUATROCIENTOS CUARENTA) estudiantes 
                beneficiarios. </p>
              <p style="text-align: justify">Realizada la verificación de las planillas de entrega en sus 
                dos modalidades RI y RPS de los niños, niñas y adolescentes focalizados y/o suplentes
                 (quienes reciben por novedad) atendidos por el Programa de Alimentación
                  Escolar – PAE 2022 conforme la matricula oficial registrada en el SIMAT a corte de 
                  29 de julio del 2022 y los soportes allegados por el operador, me permito certificar que: </p>
            </div>
            
          </div>
        </div>
        <!-- Address and Contact ends -->

        <!-- Invoice Description starts -->
        
        
        <table class="table table-sm table-bordered tg">
          <thead>
            <tr>
              <th class="tg-cly1">INSTITUCIÓN</th>
              <th class="tg-cly1">SEDE</th>
              <th class="tg-cly1">RACIONES ADJUDICADAS</th>
              <th class="tg-cly1">RACIONES ENTEGADAS <br>MODALIDAD RI<br>(RACIÓN INDUSTRIALIZADA)</th>
              <th class="tg-cly1">RACIONES ENTREGADAS<br> MODALIDAD RPS<br>( RACIÓN PREPARADA EN SITIO)</th>
              <th class="tg-cly1">DEVOLUCIONES</th>
              <th class="tg-cly1">NOVEDADES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="tg-cly1 " rowspan="4">COLEGIO ANTONIO NARIÑO</td>
              <td class="tg-0lax">PREESC MIS ALEGRIAS</td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
            </tr>
            <tr>
              <td class="tg-0lax">ESC URB DE NIÑAS NO 13 NSTRA SRA DE LOURDES</td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
            </tr>
            <tr>
              <td class="tg-0lax">COLEGIO ANTONIO NARIÑO</td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
            </tr>
            <tr>
              <td class="tg-0lax">CENT DOC MPAL SAN JOSE OBRERO</td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
            </tr>
          </tbody>
          </table>
     

        <div class="card-body invoice-padding pb-0">
          <div class="row invoice-sales-total-wrapper">
            <div class="col-md-12">
              <p class="card-text mb-0">
                <span class="fw-bold">NOTAS:</span> <span class="ms-75">Alfie Solomons</span>
              </p>
            </div>
            <br><br><br>
            <div class="col-md-6 justify-content">
              <img src="{{Auth::user()->firma->url_path}}" width="200px" alt=""><br>
                  <hr class="my-50" />
                  <p style="text-transform: uppercase">{{Auth::user()->name}}</p>  
                  <p style="text-transform: uppercase">Cedula de ciudadania: {{Auth::user()->documento}}</p>           
                  <p style="text-transform: uppercase">Cargo: {{Auth::user()->cargo}}</p>
                  <p style="text-transform: uppercase">CONTRATO No.: {{Auth::user()->contrato}}</p>
            </div>
          </div>
        </div>
        <!-- Invoice Description ends -->

        
  
      </div>
    </div>
    <!-- /Invoice -->

    <!-- Invoice Actions -->
    <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
      <div class="card">
        <div class="card-body">
          <button class="btn btn-primary w-100 mb-75" data-bs-toggle="modal" data-bs-target="#send-invoice-sidebar">
            Send Invoice
          </button>
          <button class="btn btn-outline-secondary w-100 btn-download-invoice mb-75">Download</button>
          <a class="btn btn-outline-secondary w-100 mb-75" href="{{url('app/invoice/print')}}" target="_blank"> Print </a>
          <a class="btn btn-outline-secondary w-100 mb-75" href="{{url('app/invoice/edit')}}"> Edit </a>
          <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
            Add Payment
          </button>
        </div>
      </div>
    </div>
    <!-- /Invoice Actions -->
  </div>
</section>

<!-- Send Invoice Sidebar -->
<div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
  <div class="modal-dialog sidebar-lg">
    <div class="modal-content p-0">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-header mb-1">
        <h5 class="modal-title">
          <span class="align-middle">Send Invoice</span>
        </h5>
      </div>
      <div class="modal-body flex-grow-1">
        <form>
          <div class="mb-1">
            <label for="invoice-from" class="form-label">From</label>
            <input
              type="text"
              class="form-control"
              id="invoice-from"
              value="shelbyComapny@email.com"
              placeholder="company@email.com"
            />
          </div>
          <div class="mb-1">
            <label for="invoice-to" class="form-label">To</label>
            <input
              type="text"
              class="form-control"
              id="invoice-to"
              value="qConsolidated@email.com"
              placeholder="company@email.com"
            />
          </div>
          <div class="mb-1">
            <label for="invoice-subject" class="form-label">Subject</label>
            <input
              type="text"
              class="form-control"
              id="invoice-subject"
              value="Invoice of purchased Admin Templates"
              placeholder="Invoice regarding goods"
            />
          </div>
          <div class="mb-1">
            <label for="invoice-message" class="form-label">Message</label>
            <textarea
              class="form-control"
              name="invoice-message"
              id="invoice-message"
              cols="3"
              rows="11"
              placeholder="Message..."
            >
Dear Queen Consolidated,

Thank you for your business, always a pleasure to work with you!

We have generated a new invoice in the amount of $95.59

We would appreciate payment of this invoice by 05/11/2019</textarea
            >
          </div>
          <div class="mb-1">
            <span class="badge badge-light-primary">
              <i data-feather="link" class="me-25"></i>
              <span class="align-middle">Invoice Attached</span>
            </span>
          </div>
          <div class="mb-1 d-flex flex-wrap mt-2">
            <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Send</button>
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Send Invoice Sidebar -->

<!-- Add Payment Sidebar -->
<div class="modal modal-slide-in fade" id="add-payment-sidebar" aria-hidden="true">
  <div class="modal-dialog sidebar-lg">
    <div class="modal-content p-0">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-header mb-1">
        <h5 class="modal-title">
          <span class="align-middle">Add Payment</span>
        </h5>
      </div>
      <div class="modal-body flex-grow-1">
        <form>
          <div class="mb-1">
            <input id="balance" class="form-control" type="text" value="Invoice Balance: 5000.00" disabled />
          </div>
          <div class="mb-1">
            <label class="form-label" for="amount">Payment Amount</label>
            <input id="amount" class="form-control" type="number" placeholder="$1000" />
          </div>
          <div class="mb-1">
            <label class="form-label" for="payment-date">Payment Date</label>
            <input id="payment-date" class="form-control date-picker" type="text" />
          </div>
          <div class="mb-1">
            <label class="form-label" for="payment-method">Payment Method</label>
            <select class="form-select" id="payment-method">
              <option value="" selected disabled>Select payment method</option>
              <option value="Cash">Cash</option>
              <option value="Bank Transfer">Bank Transfer</option>
              <option value="Debit">Debit</option>
              <option value="Credit">Credit</option>
              <option value="Paypal">Paypal</option>
            </select>
          </div>
          <div class="mb-1">
            <label class="form-label" for="payment-note">Internal Payment Note</label>
            <textarea class="form-control" id="payment-note" rows="5" placeholder="Internal Payment Note"></textarea>
          </div>
          <div class="d-flex flex-wrap mb-0">
            <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Send</button>
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Add Payment Sidebar -->
@endsection

@section('vendor-script')
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('js/scripts/pages/app-invoice.js')}}"></script>
@endsection

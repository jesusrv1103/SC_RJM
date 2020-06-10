@extends('admin.layouts.main')
@section('sub-header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Citas para Tramite  de Registro  de Mandamientos Judiciales
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Listado de Citas</a>

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>
@stop
@section('content')
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand 
                    flaticon2-send"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                 Listado  de   Citas
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <!--
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-download"></i> Export
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Choose an option</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-print"></i>
                                            <span class="kt-nav__link-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-copy"></i>
                                            <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
                                            <span class="kt-nav__link-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                            <span class="kt-nav__link-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        &nbsp;
                        <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            New Record
                        </a>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table   class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>

                    <tr>
                        <th>Folio</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Nombre Persona<br> Citada</th>
                        <th>Fecha Nacimiento<br> Persona Citada</th>
                        <th>Tipo  de  Tramite </th>
                        <th>Medio por el<br> que se Agenda </th>
                        <th>Atendida</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($citas as $cita)
                    <tr>
                        <td>{{ $cita->folio }}</td>
                        <td>{{ $cita->fecha }}</td>
                        <td>{{ $cita->hora_atencion->hora }}</td>
                        <td>{{ $cita->persona->nombre }}</td>
                        <td>{{ $cita->persona->fecha_nacimiento }}</td>
                        <td>{{ $cita->t_tramite->nombre }}</td>
                        <td>{{ $cita->medio_agenda }}</td>
                        <td>
                            <center>
                            @if ( $cita->Atendida==1)
                            <input type="checkbox" checked  disabled> 
                         @else 
                           <input type="checkbox" >
                         @endif
                            </center>
                      
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


            <!--end: Datatable -->
        </div>
    </div>

</div>


<!-- end:: Content -->
@push('styles')

<!--begin::Page Vendors Styles(used by this page) -->
<link href="/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />


@endpush
@push('scripts')

<!--begin::Page Vendors(used by this page) -->
<script src="/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->
<!--begin::Page Scripts(used by this page) -->
<script src="/assets/js/demo1/pages/crud/datatables/advanced/row-callback.js" type="text/javascript"></script>

<!--end::Page Scripts -->

<script>
    $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });


        
</script>
@endpush
@stop
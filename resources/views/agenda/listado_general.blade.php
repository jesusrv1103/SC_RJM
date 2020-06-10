@extends('admin.layouts.main')
@section('sub-header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Citas para Tramite de Registro de Mandamientos Judiciales
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Listado General de Citas</a>
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
                    Listado General de Citas
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt-listado-general">

                <thead>

                    <tr>

                        <th>Folio</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Nombre Persona<br> Citada</th>
                        <th>Fecha Nacimiento<br> Persona Citada</th>
                        <th>Teléfono:</th>
                        <th>Tipo de Tramite </th>
                        <th>Medio por el<br> que se Agenda </th>
                        <th>Atendida</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($citas as $cita)
                    <tr>

                        <td>{{ $cita->folio }}</td>
                        <td>{{ $cita->fecha->format('d/m/Y')  }}</td>
                        <td>{{ $cita->hora_atencion->hora }}</td>
                        <td>{{ $cita->persona->nombre }}</td>
                        <td>{{ $cita->persona->fecha_nacimiento->format('d/m/Y')  }}</td>
                        <td>{{ $cita->persona->telefono }}</td>
                        <td>{{ $cita->t_tramite->nombre }}</td>
                        <td>{{ $cita->medio_agenda }}</td>
                        <td>
                            <center>
                                @if ( $cita->Atendida==1)
                                <input type="checkbox" checked disabled>
                                @else
                                <input type="checkbox">
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
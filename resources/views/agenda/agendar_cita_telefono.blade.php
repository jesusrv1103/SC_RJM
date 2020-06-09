@extends('admin.layouts.main')
@section('sub-header')
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Listado  de   Citas
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
               
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Registrar </a>
            </div>
        </div>


    </div>
</div>

<!-- end:: Subheader -->
@stop
@section('content')
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Registrar cita
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form kt-form--label-right" method="POST" action="{{ route('cita.store.telefono') }}">
            {{ csrf_field() }}
            <div class="kt-portlet__body">

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Nombre completo:<span style="color:red;">*</span></label>
                    <div class="col-8">
                        <input class="form-control" placeholder="IVAN GALVEZ GARCIA"  type="text" onchange="mayus(this);" name="nombre_persona"
                            id="example-text-input">
                        <span class="form-text text-muted">
                            Por favor ingrese su nombre completo ( ejemplo: JUAN LÓPEZ GARCÍA).
                        </span>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Fecha de nacimiento:<span style="color:red;">*</span></label>
                    <div class="col-8">
                        <input class="form-control" name="fecha_nacimiento"  type="date">
                        <span class="form-text text-muted">
                         
                            Por favor ingresa fecha de nacimiento
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Tipo de tramite:<span style="color:red;">*</span></label>
                    <div class="col-8">
                        <select class="form-control kt-select2" id="kt-tipo-tramite" style="width: 100%" name="tipo_tramite" required>
                            @foreach ($tipo_tramites as $tramite)
                            <option></option>
                            <option value="{{$tramite->id}}">
                                {{$tramite->nombre}}</option>
                            @endforeach

                        </select>
                        <span class="form-text text-muted">Selecciona el tipo de tramite a realizar.</span>
                    </div>
                </div>

             


                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Fecha para cita:<span style="color:red;">*</span></label>
                    <div class="col-8">
                        <input class="form-control" value="" name="fecha_cita" type="date" min="{{ date('Y-m-d', strtotime(now())) }}" max="{{ date('Y-m-d', strtotime(now()."+ 20 days")) }}" id="fecha_cita" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label">Horarios disponibles: <span style="color:red;">*</span></label>
                    <div class="col-8">
                        <select class="form-control  kt-select2" onchange="verificarDisponibilidad();" id="kt-select-horario" style="width: 100%" name="hora_cita" required>

                        </select>
                        <span class="form-text text-muted">Seleccione alguno de los horarios disponibles.</span>
                    </div>
                </div>


            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-success">Registrar</button>
                            <a href="" class="btn btn-secondary">
                                Cancelar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>

    <!--end::Portlet-->




</div>

<!-- end:: Content -->
@push('styles')

<!--begin::Page Vendors Styles(used by this page) -->
<link href="/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

<link href="/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')

<!--begin::Page Vendors(used by this page) -->
<script src="/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="/assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>

	<!--begin::Page Scripts(used by this page) -->
<script src="/assets/js/demo1/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>



<script>
    function mayus(e) {

        e.value = e.value.toUpperCase();
    }

    function soloLetras(e) {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toLowerCase();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz.";
        especiales = "8-37-39-46";
        tecla_especial = false
        for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }
        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
        }
    }


    function soloNumeros(e) {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key);
        letras = " 1,2,3,4,5,6,7,8,9,0,.";
        especiales = "8-37-39-46";

        tecla_especial = false
        for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }

        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
        }
    }

 
    

    $(function() {
        $('#fecha_cita').on('change', onSelectFechaCambio);

    });

    
    $('#kt-select-horario, #kt_select2_3_validate').select2({
            placeholder: "Seleccione alguno de los horarios disponibles.",
        });

    $('#kt-tipo-tramite, #kt_select2_3_validate').select2({
            placeholder: "Seleccione tipo de tramite.",
        });

    function onSelectFechaCambio() {
        var fecha = $(this).val();
            fechaf= new Date(fecha);
        
        
        if(fechaf.getDay()==6  || fechaf.getDay() ==5 ){
          alert("¡Lo sentimos el  tramite para el  Registro  de Mandamientos  Judiciales solo es de Lunes a Viernes.!")
          var html_select = '<option></option>';
          html_select += '<option value="">No existen horarios  disponibles para esta fecha</option>'
                $('#kt-select-horario').html(html_select);
          
        } else {

            $.get('/api/horasdisponibles/' + fecha, function(data) {
            var html_select = '<option></option>';
            for (let index = 0; index < data.length; index++) {

                html_select += '<option value="' + data[index].id + '">' + data[index].hora + '</option>'
                $('#kt-select-horario').html(html_select);

            }
        });


        }
        //alert(fecha);


      



    }
</script>
@endpush
@stop
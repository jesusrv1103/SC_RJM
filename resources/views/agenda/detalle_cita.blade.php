<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->

<head>

    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="../">

    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title>SISTEMA DE CITAS PARA EL REGISTRO DE MANDAMIENTOS JUDICIALES | FGJEZ</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->


    <!--begin::Page Custom Styles(used by this page) -->
    <link href="/assets/css/demo1/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="/assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="/assets/logos_fiscalia/azul180x90.png" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
    class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

    <!-- begin::Page loader -->

    <!-- end::Page Loader -->

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed"
        style="background-color:#212750 !important;">
        <div class="kt-header-mobile__logo">
            <a href="demo2/index.html">
                <img alt="Logo" src="/assets/logos_fiscalia/gris_blanco140.png" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar" style="background-color:#212750 !important;">
            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more-1"></i></button>
        </div>
    </div>

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on"
                    style="background-color:#212750 !important;">
                    <div class="kt-header__top">
                        <div class="kt-container ">

                            <!-- begin:: Brand -->
                            <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                                <div class="kt-header__brand-logo">
                                    <a href="demo2/index.html">
                                        <img alt="Logo" src="/assets/logos_fiscalia/gris_blanco140.png"
                                            class="kt-header__brand-logo-default" />
                                        <img alt="Logo" src="/assets/logos_fiscalia/gris_blanco140.png"
                                            class="kt-header__brand-logo-sticky" />
                                    </a>
                                </div>
                                <div class="kt-header__brand-nav">
                                    <h1 style="color:white;">
                                        FISCALIA GENERAL DE JUSTICIA DEL ESTADO DE ZACATECAS
                                    </h1>

                                </div>
                            </div>

                            <!-- end:: Brand -->

                            <!-- begin:: Header Topbar -->


                            <!-- end:: Header Topbar -->
                        </div>
                    </div>

                    <div class="kt-header__bottom" style="background-color:#9D9D9C !important;">
                        <div class="kt-container " style="background-color:#9D9D9C !important;">




                            <center>

                                <h1 style="color:white;">
                                    Sistema de Citas Para Tramitar el Registro de mandamientos Judiciales </h1>
                            </center>




                            <!-- end: Header Menu -->
                        </div>
                    </div>

                </div>

                <!-- end:: Header -->
                <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch"
                    id="kt_body">
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Content Head -->
                        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                            <div class="kt-container ">

                                <div class="kt-subheader__toolbar">
                                    <div class="kt-subheader__wrapper">



                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end:: Content Head -->

                        <!-- begin:: Content -->

                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">



                            <div class="row">
                                <div class="col-md-3">

                                </div>

                                <div class="kt-portlet col-md-6">



                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Cita se ha registrado con éxito
                                            </h3>


                                        </div>
                                        <div class="kt-portlet__head-label">
                                            <a class="btn btn-success" href="{{ route('acuse.cita',$datos_cita->id) }}">
                                                Descargar Acuse
                                            </a>
                                        </div>
                                    </div>




                                    <!--begin::Form-->
                                    <div class="kt-portlet__body">
                                        <div class="kt-widget14__header ">
                                            <h3 class="kt-widget14__title">
                                                <span><strong>Folio de cita: </strong> {{$datos_cita->folio}}</span>
                                            </h3>
                                        </div>
                                        <br>


                                        <div class="kt-widget14__header ">
                                            <h3 class="kt-widget14__title">
                                                <i class="flaticon-avatar kt-font-brand"></i> <span>Datos Generales de
                                                    la persona que realiza la cita</span>
                                            </h3>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Nombre:</span>
                                                <span
                                                    class="kt-widget__data"><strong>{{ $datos_cita->persona->nombre }}</strong></span>
                                            </div>
                                        </div>


                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Fecha de Nacimiento:</span>
                                                <span
                                                    class="kt-widget__data"><strong>{{ $datos_cita->persona->fecha_nacimiento->format('d/m/Y') }}</strong></span>
                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Teléfono:</span>
                                                <span
                                                    class="kt-widget__data"><strong>{{ $datos_cita->persona->telefono }}</strong></span>
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="kt-widget14__header">
                                            <h3 class="kt-widget14__title">
                                                <i class="flaticon-avatar kt-font-brand"></i> <span> Datos de
                                                    cita</span>
                                            </h3>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Folio:</span>
                                                <span
                                                    class="kt-widget__data"><strong>{{ $datos_cita->folio }}</strong></span>
                                            </div>
                                        </div>
                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Fecha:</span>
                                                <span
                                                    class="kt-widget__data"><strong>{{ $datos_cita->fecha->format('d/m/Y') }}</strong></span>
                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Hora:</span>
                                                <span
                                                    class="kt-widget__data"><strong>{{ $datos_cita->hora_atencion->hora }}</strong></span>
                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">Tipo de Tramite:</span>
                                                <span
                                                    class="kt-widget__data"><strong>{{$datos_cita->t_tramite->nombre}}</strong></span>
                                            </div>
                                        </div>
                                        <br><br>


                                        @if($datos_cita->t_tramite->id ==1)

                                        <div class="kt-widget14__header">
                                            <h3 class="kt-widget14__title">
                                                <i class="flaticon-avatar kt-font-brand"></i> <span>DOCUMENTACIÓN
                                                    REQUERIDA PARA TRÁMITE PERSONAL</span>
                                            </h3>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Acta de nacimiento(original)</span>

                                            </div>
                                        </div>
                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Credencial de elector</span>

                                            </div>
                                        </div>
                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-CURP nuevo formato</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Comprobante de domicilio</span>

                                            </div>
                                        </div>


                                        @else
                                        <div class="kt-widget14__header">
                                            <h3 class="kt-widget14__title">
                                                <i class="flaticon-avatar kt-font-brand"></i> <span>DOCUMENTACIÓN
                                                    REQUERIDA PARA PERSONAS EN EL EXTRANJERO</span>
                                            </h3>
                                        </div>
                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Acta de nacimiento(original)</span>

                                            </div>
                                        </div>
                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Matricula consular o pasaporte
                                                    vigente(Copia)</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-CURP nuevo formato</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Comprobante de domicilio en el
                                                    extranjero(copia)</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-1 fotografia tamaño infantil en blanco y
                                                    negro</span>

                                            </div>
                                        </div>
                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Del familiar que va realizar el
                                                    trámite</span>
                                                <br>&nbsp;&nbsp;&nbsp;-Credencial de elector
                                                <br>&nbsp;&nbsp;&nbsp;-Comprobante de domicilio(copia)

                                            </div>
                                        </div>
                                        @endif
                                        <br>

                                        <div class="kt-widget14__header">
                                            <h3 class="kt-widget14__title">
                                                <i class="flaticon-avatar kt-font-brand"></i> <span>CONDICIONES DE SU
                                                    CITA</span>
                                            </h3>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Horario exclusivo para agendar su cita 2:00 a 3:00 de la
                                                    tarde, de lunes a viernes</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Servicio limitado a 20 personas
                                                    diarias.</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Le rogamos puntualidad para acudir a su
                                                    cita y estar en nuestras instalaciones 5 minutos
                                                    antes, de no ser así, será necesario agendar una nueva cita.</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-La documentación deberá presentarse como
                                                    se indica, de no ser así será necesario agendar
                                                    una nueva cita.</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-El ingreso será en bloques de 5
                                                    personas.</span>

                                            </div>
                                        </div>
                                        <br>

                                        <div class="kt-widget14__header">
                                            <h3 class="kt-widget14__title">
                                                <i class="flaticon-avatar kt-font-brand"></i> <span>MEDIDAS DE HIGIENE Y
                                                    PREVENCIÓN</span>
                                            </h3>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Acudir solo la
                                                    persona interesada.</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Acudir solo la
                                                    persona interesada.</span>

                                            </div>
                                        </div>


                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Mantener sana
                                                    distancia.</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Uso de
                                                    cubreboca.</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Realizar lavado de manos previo a
                                                    formalizar el pago y la entrega de documentos</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Realizar lavado de manos previo a
                                                    formalizar el pago y la entrega de documentos</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Previo a la digitalización de huellas y
                                                    toma de fotografía, deberá utilizar gel antibacterial.</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                                <div class="kt-widget__contact">
                                                      
                                                        <img alt="Logo" height="90px" src="/assets/logos_fiscalia/imagen_salud.png" />
    
                                                </div>
                                            </div>

                                        <br>





                                        <div class="kt-widget14__header">
                                            <h3 class="kt-widget14__title">
                                                <i class="flaticon-avatar kt-font-brand"></i> <span>MAS
                                                    INFORMACIÓN</span>
                                            </h3>
                                        </div>


                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Costo del servicio $174.00</span>

                                            </div>
                                        </div>

                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-El documento solicitado se entrega al
                                                    concluir el trámite.</span>

                                            </div>
                                        </div>


                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-Para mayor información: 01 (492) 92 5 60 54, en horario de 2:00 a 3:00 de la tarde.</span>

                                            </div>
                                        </div>


                                        <div class="kt-widget__item">
                                            <div class="kt-widget__contact">
                                                <span class="kt-widget__label">-La cita agendada podrá estar sujeta a cambios para causas emergentes en cuyo caso se notificara su cambio oportunamente.</span>

                                            </div>
                                        </div>






                                    </div>

                                    <!--

                                    <div class="form-group form-group-last">
                                        <div class="alert alert-secondary" role="alert">
                                            <div class="alert-icon"><i class="flaticon-warning-sign kt-font-brand"></i>
                                            </div>
                                            <div class="alert-text">
                                                Le rogamos puntualidad para acudir a su cita, de no ser así Serra
                                                necesario agendar una nueva cita.
                                            </div>
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            <div class="alert-icon"><i class="flaticon-warning-sign kt-font-brand"></i>
                                            </div>
                                            <div class="alert-text">
                                                *Si no. cubre la totalidad. de los requisitos para su tramite, no se
                                                brindara el servicio y será necesario agendar nueva cita.
                                                <br>
                                                *Deberá presentar su ficha de comprobación de cita.
                                            </div>
                                        </div>
                                    </div>
-->

                                    <!--end::Form-->
                                </div>


                            </div>
                            <!--begin::Portlet-->

                            <!--end::Portlet-->




                        </div>

                        <!-- end:: Content -->
                    </div>
                </div>

                <!-- begin:: Footer -->
                <div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer"
                    style="background-color:#212750 !important;">

                    <div class="kt-footer__bottom" style="background-color:#212750 !important;">
                        <div class="kt-container ">
                            <div class="kt-footer__wrapper">
                                <div class="kt-footer__logo">
                                    <a href="https://www.fiscaliazacatecas.gob.mx">
                                        <img alt="Logo" width="30%;" src="/assets/logos_fiscalia/gris_blanco140.png">
                                    </a>
                                    <div class="kt-footer__copyright">

                                        <a href="https://www.fiscaliazacatecas.gob.mx" target="_blank"
                                            style="color:white;">FGJEZ</a>
                                    </div>
                                </div>
                                <div class="kt-footer__menu">
                                    <a href="https://www.fiscaliazacatecas.gob.mx" style="color:white;"
                                        target="_blank">https://www.fiscaliazacatecas.gob.mx</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end:: Footer -->

            </div>
        </div>
    </div>

    <!-- end:: Page -->


    <!-- end::Scrolltop -->







    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#374afb",
                    "light": "#ffffff",
                    "dark": "#282a3c",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>

    <!-- end::Global Config -->

    <!--begin:: Global Mandatory Vendors -->
    <script src="/assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>


    <script src="/assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>
    <script src="/assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js"
        type="text/javascript"></script>
    <script src="/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript">
    </script>
    <script src="/assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript">
    </script>
    <script src="/assets/vendors/general/boo;
    tstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript">
    </script>
    <script src="/assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js"
        type="text/javascript"></script>
    <script src="/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
    <script src="/assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript">
    </script>
    <script src="/assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js"
        type="text/javascript"></script>
    <script src="/assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
    <script src="/assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
    <script src="/assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
    <script src="/assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
    <script src="/assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"
        type="text/javascript"></script>
    <script src="/assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
    <script src="/assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
    <script src="/assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="/assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors(used by this page) -->
    <script src="/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript">
    </script>
    <script src="/assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

    <!--end::Page Vendors -->

</body>
<!--begin::Page Scripts(used by this page) -->
<!--<script src="/assets/js/demo1/pages/wizard/wizard-1.js" type="text/javascript"></script>-->
<script src="/assets/js/demo1/pages/crud/forms/validation/form-controls.js" type="text/javascript"></script>
<script src="/assets/js/demo1/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script src="/assets/js/demo1/pages/crud/forms/widgets/dropzone.js" type="text/javascript"></script>
<script src="/assets/js/demo1/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<!--begin::Page Scripts(used by this page) -->
<script src="/assets/js/demo1/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>


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

    function verificarDisponibilidad() {
        var fecha = document.getElementById("fecha_cita").value;
        if (fecha == "") {
            alert("fecha  vacia");

        } else {
            alert(fecha);
        }
    }



    $(function() {
        $('#fecha_cita').on('change', onSelectFechaCambio);

    });

    function onSelectFechaCambio() {
        var fecha = $(this).val();

       
        //alert(fecha);

       
        Ya se encuentran
        $.get('/api/horasdisponibles/' + fecha, function(data) {

            if(data=="Ya se encuentran"){
                alert("Ya se encuentran");
            }
            var html_select = '<option></option>';
            for (let index = 0; index < data.length; index++) {

                html_select += '<option value="' + data[index].id + '">' + data[index].hora + '</option>'
                $('#kt-select-horario').html(html_select);

            }
        });


        $('#kt-select-horario, #kt_select2_3_validate').select2({
            placeholder: "Seleccione alguno de los horarios disponibles.",
        });


    }
</script>




</html>
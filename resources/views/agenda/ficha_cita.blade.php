<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Citas para Tramitar el Registro de Mandamientos Judiciales</title>
</head>

<body>

    <div style="text-align: center;">

        <br>
        <img src="{{ public_path('assets/logos_fiscalia/original180x90.png')}}" width="200px">
    </div>

    <center>
        <h3>CITA PARA TRAMITAR REGISTRO DE MANDAMIENTOS JUDICIALES</h3>
        <p>(antes CARTA DE ATENCEDENTES NO PENALES)</p>
    </center>
    <div>
        <table>
            <tr>
                <th colspan="2">Datos Generales de la persona que realiza la cita</th>

            </tr>
            <tr>
                <td>Nombre: </td>
                <td>{{$cita->persona->nombre}}</td>
            </tr>
            <tr>
                <td>Fecha de Nacimiento: </td>
                <td>{{$cita->persona->fecha_nacimiento->format('d/m/Y')}}</td>
            </tr>
        </table>

        <table>
            <tr>
                <th style="text-align: left;" colspan="2">Datos de la cita</th>

            </tr>

            <tr>
                <td>Folio: </td>
                <td>{{$cita->folio}}</td>
            </tr>

            <tr>
                <td>Fecha: </td>
                <td>{{$cita->fecha->format('d/m/Y')}}</td>
            </tr>

            <tr>
                <td>Hora: </td>
                <td>{{$cita->hora_atencion->hora}}</td>
            </tr>


            <tr>
                <td>Tipo de tramite: </td>
                <td>{{$cita->t_tramite->nombre}}</td>
            </tr>
        </table>

        <table>
            <tr>
                <th style="text-align: left;">Requisitos</th>

            </tr>
            @if($cita->t_tramite->id ==1)
            <tr>
                <td>-Acta de nacimiento(original)</td>

            </tr>
            <tr>
                <td>-Credencial de elector</td>

            </tr>
            <tr>
                <td>-CURP nuevo formato</td>

            </tr>
            <tr>
                <td>-Comprobante de domicilio</td>

            </tr>
            @else
            <tr>
                <td>-Acta de nacimiento(original)</td>

            </tr>

            <tr>
                <td>-Matricula consular o pasaporte
                    vigente</td>

            </tr>

            <tr>
                <td>-CURP nuevo formato</td>

            </tr>
            <tr>
                <td>-Comprobante de domicilio en el
                    extranjero(copia)</td>

            </tr>

            <tr>
                <td>-1 fotografia tamaño infantil en blanco y
                    negro</td>

            </tr>

            <tr>
                <td>-Del familiar que va realizar el
                        trámite</td>

            </tr>
            <tr>
                    <td>&nbsp;&nbsp;&nbsp;-Credencial de elector</td>
    
                </tr>
                <tr>
                        <td>&nbsp;&nbsp;&nbsp;-Comprobante de domicilio(copia)</td>
        
                    </tr>






            @endif
            <tr>
                <td>-Cubrir el pago de $174.00(en nuestras
                    instalaciones).</td>

            </tr>



        </table>


    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Citas para Tramitar el Registro de Mandamientos Judiciales</title>
</head>

<body>

    <div style="text-align: left;">

        <table>
            <tr>
                <td>
                    <h3>Registro de Mandamientos Judiciales </h3>
                    (antes conocida como CARTA DE ANTECEDENTES NO PENALES)
                </td>
                <td ALIGN="right">
                    <img width="135px" src="{{ public_path('assets/logos_fiscalia/original180x90.png')}}">
                </td>
            </tr>
            <tr>

                <td colspan="2" ALIGN="right">ATENCIÓN POR CITA VÍA ELECTRÓNICA</td>
            </tr>
        </table>


    </div>
    <br>
   

    <div>
    <font size="2">
        <table>
            <tr>
                <th colspan="2">DATOS GENERALES DE LA PERSONA QUE REALIZA SU CITA</th>

            </tr>
            <tr>
                <td>Nombre: </td>
                <td>{{$cita->persona->nombre}}</td>
            </tr>
            <tr>
                <td>Fecha de Nacimiento: </td>
                <td>{{$cita->persona->fecha_nacimiento->format('d/m/Y')}}</td>
            </tr>

            <tr>
                <td>Teléfono:</td>
                <td>{{$cita->persona->telefono}}</td>
            </tr>


        </table>
       
        <table>
            <tr>
                <th style="text-align: left;" colspan="2">DATOS DE LA CITA</th>

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
            @if($cita->t_tramite->id ==1)
            <tr>
                <th style="text-align: left;">DOCUMENTACIÓN REQUERIDA PARA TRÁMITE PERSONAL</th>

            </tr>

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
                <th style="text-align: left;">DOCUMENTACIÓN REQUERIDA PARA PERSONAS EN EL EXTRANJERO</th>

            </tr>
            <tr>
                <td>-Acta de nacimiento(original)</td>

            </tr>

            <tr>
                <td>-Matricula consular o pasaporte
                    vigente(copia)</td>

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




        </table>
       
        <table>
            <tr>
                <th colspan="2" style="text-align: left;">CONDICIONES DE SU CITA</th>

            </tr>
            <tr>
                <td>-Horario exclusivo para agendar su cita de 2:00 a 3:00 de la tarde, de lunes a viernes.</td>

            </tr>
            <tr>
                <td>-Servicio limitado a 20 personas diarias </td>

            </tr>

            <tr>
                <td>-Le rogamos puntualidad para acudir a su cita y estar en nuestras instalaciones 5 minutos
                    antes, de no ser así, será necesario agendar una nueva cita</td>

            </tr>
            <tr>
                <td>-La documentación deberá presentarse como se indica, de no ser así será necesario agendar
                    una nueva cita.</td>
            </tr>

            <tr>
                <td>-El ingreso será en bloques de 5 personas.</td>
            </tr>


        </table>

       
        <table>
            <tr>
                <th colspan="2" style="text-align: left;">MEDIDAS DE HIGIENE Y PREVENCIÓN</th>

            </tr>
            <tr>
                <td>-Acudir solo la persona interesada.</td>

            </tr>
            <tr>
                <td>-Mantener sana distancia. </td>

            </tr>

            <tr>
                <td>-Uso de cubreboca.</td>

            </tr>
            <tr>
                <td>-Realizar lavado de manos previo a formalizar el pago y la entrega de documentos.</td>
            </tr>

            <tr>
                <td>-Previo a la digitalización de huellas y toma de fotografía, deberá utilizar gel antibacterial.</td>
            </tr>

            <tr>
                <td ALIGN="right"> <img height="100px" src="{{ public_path('assets/logos_fiscalia/imagen_salud.png')}}"></td>
            </tr>
        


        </table>

        <table>
            <tr>
                <th style="text-align: left;">MAS INFORMACIÓN</th>

            </tr>

            <tr>
                <td>-Costo del servicio $174.00</td>

            </tr>
            <tr>
                <td>-El documento solicitado se entrega al concluir el trámite</td>

            </tr>
            <tr>
                <td>-Para mayor información: 01 (492) 92 5 60 54, en horario de 2:00 a 3:00 de la tarde.</td>

            </tr>

            <tr>
                <td>-La cita agendada podrá estar sujeta a cambios para causas emergentes en cuyo caso se notificara su cambio oportunamente.</td>

            </tr>


        </table>
    </font>



    </div>
</body>

</html>
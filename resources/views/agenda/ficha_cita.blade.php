<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Citas para Tramitar el Registro de Mandamientos Judiciales</title>
</head>

<body>
    <table>
        <th>
        <td>Fiscalía General de Justicia del Estado de Zacatecas</td>
        <th>
    </table>
    <div style="text-align: right;">
        <h3>Cita con el folio: {{$cita->folio}}</h3>
        <br>
        <img src="{{ public_path('assets/logos_fiscalia/original180x90.png')}}" width="200px">
    </div>

    <div>
        <h2>Cita Para Tramitar el Registro de Mandamientos Judiciales</h2>
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
                <td>{{$cita->persona->fecha_nacimiento}}</td>
            </tr>
        </table>

        <table>
            <tr>
            <th colspan="2">Datos de la cita</th>

            </tr>

            <tr>
                <td>Folio: </td>
                <td>{{$cita->folio}}</td>
            </tr>

            <tr>
                <td>Fecha: </td>
                <td>{{$cita->fecha}}</td>
            </tr>

            <tr>
                <td>Hora: </td>
                <td>{{$cita->hora_atencion->hora}}</td>
            </tr>


            <tr>
                <td>Tipo  de tramite: </td>
                <td>{{$cita->t_tramite->nombre}}</td>
            </tr>
        </table>

    </div>
</body>

</html>
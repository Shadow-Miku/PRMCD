<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>ReporteTickets - Laravel Framwork</title>
<style>
    table {
        font-famiy: arial, sans-serif;
        border-colapse: collapse;
        width: 100%
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: #dddddd:
    }
</style>
</head>
<body>
<h2>Reporte de Tickets</h2>

<div>
<table class="table table-borderless table-striped table-hover" >
                  <thead>
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Autor</th>
                          <th scope="col">Departamento</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">Clasificación</th>
                          <th scope="col">Encargado</th>
                          <th scope="col">Estatus</th>
                          <th scope="col">Comentarios del cliente</th>
                          <th scope="col">Comentarios al cliente</th>
                          <th scope="col">Observaciones</th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach($tickets as $consulta)
                        <tr>
                            <th scope="row">{{$consulta->idTicket}}</th>
                            <td>{{$consulta->autor}}</td>
                            <td>{{$consulta->departamento}}</td>
                            <td>{{$consulta->created_at}}</td>
                            <td>{{$consulta->clasificacion}}</td>
                            <td>{{$consulta->encargado}}</td>
                            <td>{{$consulta->estatus}}</td> 
                            <td>{{$consulta->comentarios_cliente}}</td>
                            <td>{{$consulta->comentarios_al_cliente}}</td>
                            <td>{{$consulta->observaciones}}</td>                            
                      </tr>
                    </tbody> 
                    @endforeach
                  </table>
    </div> 
</body>
</html>
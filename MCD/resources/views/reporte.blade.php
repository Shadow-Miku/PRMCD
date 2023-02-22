<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte - Laravel Framwork</title>
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
<h2>Reporte de Auxiliares</h2>
<div>
<table class="table table-borderless table-striped table-hover" >
            <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Email</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Contraseña</th>
              </tr>
            </thead>

            <tbody>
            @foreach ($ConsultaAux as $consulta)
                <tr>
                    <th scope="row">{{$consulta->idaux}}</th>  
                    <td>{{$consulta->nameA}}</td> 
                    <td>{{$consulta->emailA}}</td> 
                    <td>{{$consulta->usernameA}}</td>
                    <td>{{$consulta->password}}</td> 
              </tr>
            </tbody> 
            @endforeach
          </table>
    </div> 
</body>
</html>
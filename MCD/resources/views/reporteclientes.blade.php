

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
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
<h2>Reporte de Clientes</h2>
<div>
<table class="table table-borderless table-striped table-hover" >
                  <thead class="table-danger">
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Email</th>
                          <th scope="col">Usuario</th>
                          <th scope="col">contraseña</th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach ($ConsultaCli as $consulta)
                        <tr>
                        <th scope="row">{{$consulta->idcli}}</th>  
                        <td>{{$consulta->nameC}}</td> 
                        <td>{{$consulta->emailC}}</td> 
                        <td>{{$consulta->usernameC}}</td>
                        <td>{{$consulta->password}}</td>  
                      </tr>
                    </tbody> 
                    @endforeach
          </table>
    </div> 
</body>
</html>


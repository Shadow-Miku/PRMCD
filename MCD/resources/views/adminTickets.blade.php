@extends('plantillaA')

@section('contenido')


@if (session()->has('actualizar'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Comic fresquisimo!',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'F',
            'El comic ya no anda fresh',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Comic fresquisimo!',
            'success'
          ) </script>"!!}        
    @endif

    <h1 class="display-1 mt-4 mb-4 text-center"> Tickets registrados </h1>

      <form action="">
          <input type="search" placeholder="Buscar un ticket..." name="filtrar" class="form-control">
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-pen"></i> Buscar ticket </button>
      </form>
    
      <!--<div class="container mb-5 mt-5  gap-2">
        <button  class="btn btn-success"  onclick="location.href='#'">
          <i class="bi bi-plus"></i>  Registrar Ticket
        </button> -->
  
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
                          <th scope="col">Asignación y comentarios</th>
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
                            <td><button class="btn btn-warning" onclick="location.href='{{route('adminTickets.edit', $consulta->idTicket)}}'">
                            <i class="bi bi-person-add"></i> Asignar
                            </button></td>                 
                      </tr>
                    </tbody> 
                    @endforeach
                  </table>
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#" onclick="location.href='/imprimir4'">
          <i class="bi bi-file-pdf"></i>  Generar Reporte
        </button>
        </div>
        
    </div>
    
@stop

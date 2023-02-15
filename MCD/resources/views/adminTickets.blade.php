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

    <h1 class="display-1 mt-4 mb-4 text-center"> Comics registrados </h1>

      <form action="{{route('comic.index')}}">
          <input type="search" placeholder="Buscar un ticket..." name="filtrarC" class="form-control">
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-pen"></i> Buscar ticket </button>
      </form>
    
      <div class="container mb-5 mt-5  gap-2">
        <button  class="btn btn-success"  onclick="location.href='#'">
          <i class="bi bi-plus"></i>  Registrar otro comic
        </button> 
  
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
                          <th scope="col">Modificar</th>
                          <th scope="col">Eliminar</th>
                          <th scope="col">Vender</th>
                      </tr>
                    </thead>

                    <tbody>
                    @foreach($consultaComic as $consulta)
                        <tr>
                            <th scope="row">{{$consulta->idComic}}</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> 
                            <td></td>
                            <td></td>          
                            <td><button class="btn btn-warning" onclick="location.href='#'">
                            <i class="bi bi-pen"></i> Asignar
                            </button></td>
                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#">
                            <i class="bi bi-trash2"></i>  Comentarios
                            </button></td>
                            <td><button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#">
                            <i class="bi bi-cart-plus"></i>  Observaciones
                            </button></td>
                      </tr>
                    </tbody> 
    @include('modalEliminarComic')
    @endforeach
        </table>
        </div>
    </div>
    
@stop

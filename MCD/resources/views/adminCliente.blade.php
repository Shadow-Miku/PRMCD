@extends('plantillaA')

@section('contenido')


@if (session()->has('actualizar'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Cliente actualizado',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'F',
            'Cliente eliminado',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Cliente registrado',
            'success'
          ) </script>"!!}        
    @endif

    <h1 class="display-1 mt-4 mb-4 text-center"> Clientes registrados </h1>

      <form action="#">
          <input type="search" placeholder="Buscar un comic..." name="filtrarC" class="form-control">
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-pen"></i> Buscar cliente </button>
      </form>
    
      <div class="container mb-5 mt-5  gap-2">
        <button  class="btn btn-success"  onclick="location.href='#'">
          <i class="bi bi-plus"></i>  Registrar otro cliente
        </button> 
  
          <table class="table table-borderless table-striped table-hover" >
                  <thead>
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Email</th>
                          <th scope="col">Usuario</th>
                          <th scope="col">Modificar</th>
                          <th scope="col">Eliminar</th>
                      </tr>
                    </thead>

                    <tbody>
                   
                        <tr>
                            <th scope="row"></th>  
                            <td><button class="btn btn-warning" onclick="location.href='#'">
                            <i class="bi bi-pen"></i> Actualizar datos del Cliente
                            </button></td>
                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="">
                            <i class="bi bi-trash2"></i>  Dar de baja al Cliente
                            </button></td>
                      </tr>
                    </tbody> 

    
        </table>
        </div>
    </div>
    
@stop

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

    <h1 class="display-1 mt-4 mb-4 text-center"> Departamentos registrados </h1>

      <form action="">
          <input type="search" placeholder="Buscar un departamento..." name="filtrarC" class="form-control">
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-pen"></i> Buscar Departamento </button>
      </form>
    
      <div class="container mb-5 mt-5  gap-2">
        <button  class="btn btn-success"  onclick="location.href='#'">
          <i class="bi bi-plus"></i>  Registrar Departamento
        </button> 
  
          <table class="table table-borderless table-striped table-hover" >
                  <thead>
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre del Departamento</th>
                          <th scope="col">Actualizar</th>
                          <th scope="col">Eliminar</th>
                      </tr>
                    </thead>

                    <tbody>
                   
                        <tr>
                            <th scope="row"></th>
                            <td></td>          
                            <td><button class="btn btn-warning" onclick="location.href='#'">
                            <i class="bi bi-pen"></i> Actualizar
                            </button></td>
                            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#">
                            <i class="bi bi-trash2"></i>  Eliminar
                            </button></td>
                      </tr>
                    </tbody> 
    
    
        </table>
        </div>
    </div>
    
@stop

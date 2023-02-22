@extends('plantillaA')

@section('contenido')


@if (session()->has('actualizar'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Datos del auxiliar actualizado',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'F',
            'Datos del auxiliar eliminados',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Auxiliar registrado',
            'success'
          ) </script>"!!}        
    @endif

    <h1 class="display-1 mt-4 mb-4 text-center"> Auxiliares registrados </h1>

      <form action="#">
          <input type="search" placeholder="Buscar un auxiliar..." name="filtrarC" class="form-control">
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-pen"></i> Buscar Auxiliar </button>
      </form>
    
      <div class="container mb-5 mt-5  gap-2">
        <button  class="btn btn-success"  onclick="location.href='{{route('adminAuxiliar.create')}}'">
          <i class="bi bi-plus"></i>  Registrar otro auxiliar
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
            @foreach ($ConsultaAux as $consulta)
                <tr>
                    <th scope="row">{{$consulta->idaux}}</th>  
                    <td>{{$consulta->nameA}}</td> 
                    <td>{{$consulta->emailA}}</td> 
                    <td>{{$consulta->usernameA}}</td>
                    <td>{{$consulta->password}}</td> 
                    <td>
                      <button class="btn btn-warning" onclick="location.href='{{route('adminAuxiliar.edit', $consulta->idaux)}}'">
                    <i class="bi bi-pen"></i> Actualizar datos del Auxiliar
                    </button></td>
                    <td>
                    <button type="button" class="btn btn-danger" onclick="location.href='{{route('adminAuxiliar.show', $consulta->idaux)}}'">
                    <i class="bi bi-trash2"></i>  Dar de baja al Auxiliar
                    </button></td>
              </tr>
            </tbody> 
            @endforeach
          </table>
          <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#" onclick="location.href='/imprimir'">
          <i class="bi bi-file-pdf"></i>  Generar Reporte
        </button>
        </div>
    </div>
    
@stop

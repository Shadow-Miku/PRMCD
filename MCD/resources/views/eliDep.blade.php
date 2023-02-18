@extends('plantillaA')

<!--Inicia la seccion que va a cambiar-->
@section('contenido')




    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>¿Seguro que quieres eliminar?</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    
    <div class="container col-md-6 mb-5"> 
        
        <div class="card text-center">
            
            <div class="card-header">
                <h5 class="text-primary text center"> ¿Eliminar el siguiente Departamento? </h5>
            </div>
            
            <div class="card-body">
                <p class="card-text"> Nombre: {{$consultaId->nombre}} </p>
                <p class="card-text"> Creado el: {{$consultaId->created_at}} </p>
                
            </div>
            <form method="POST" action="{{route('adminDepartamento.destroy', $consultaId->idDepartamento)}}">
                @csrf
                @method('delete')
            <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary  m-1"> Si, eliminalo </button>
            <a href="{{route('adminDepartamento.index')}}" class="btn btn-warning">No, Regresa a admin </a>
            </div>
            </form>       
        </div>
    </div>
</form>
@stop
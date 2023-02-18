@extends('plantillaA')

@section('contenido')



    <div class="container mt-5 col-md-6">

        <h1 class="display-1 text-center mb-5"> Actualizar Datos del Departamento </h1>

            @if ($errors->any())
                @foreach ($errors->all() as $error)

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>    

                @endforeach

            @endif
       
        <div class="card  mb-5 fw-bold">

            <div class="card-header fw-bold">
                Actualizar datos del departamento
            </div>

            <div class="card-body">
            <form class="m-4" method="post" action="{{route('adminDepartamento.update', $consultaId->idDepartamento)}}">    
                @csrf

                {!! method_field('PUT')!!}
                <div>
                <div class="mb-3">
                        <label class="form-label">Nombre del departamento:</label>
                        <input type="text" class="form-control" name="nombre" value="{{$consultaId->nombre}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('nombre') }} </p>
                    </div>

                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary  m-1"> Actualizar datos </button>
            </form>
            </div>

        </div>

    </div>

@stop
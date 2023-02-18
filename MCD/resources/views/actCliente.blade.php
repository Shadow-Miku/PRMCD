@extends('plantillaA')

@section('contenido')



    <div class="container mt-5 col-md-6">

        <h1 class="display-1 text-center mb-5"> Actualizar Datos de Cliente </h1>

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
                Registro de Clientes
            </div>

            <div class="card-body">
            <form class="m-4" method="post" action="{{route('adminCliente.update', $consultaId->idcli)}}">    
                @csrf

                {!! method_field('PUT')!!}
                <div>
                <div class="mb-3">
                        <label class="form-label">Nombre y apellidos:</label>
                        <input type="text" class="form-control" name="nombre" value="{{$consultaId->nameC}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('nombre') }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Correo Electronico:</label>
                        <input type="email" class="form-control"  name="correo" value="{{$consultaId->emailC}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('correo') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" value="{{$consultaId->usernameC}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('usuario') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contraseña:</label>
                        <input type="text" class="form-control" name="contrasena" value="{{$consultaId->password}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('contrasena') }} </p>
                    </div>

                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary  m-1"> Actualizar datos </button>
            </form>
            </div>

        </div>

    </div>

@stop
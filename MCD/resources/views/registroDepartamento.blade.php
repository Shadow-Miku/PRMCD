@extends('plantillaA')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Articulo registrado',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Auxuilares de soporte </h1>

        <div class="card mb-5">

            <div class="card-header fw-bold">
                Registro de Auxiliares de soporte
            </div>

            <div class="card-body">

                <form class="m-4" method="#" action="#">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->

                    <div class="mb-3">
                        <label class="form-label">Nombre del departamento:</label>
                        <input type="text" class="form-control" name="tipo" value="{{old('tipo')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('tipo') }} </p>
                    </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-success m-1"> Registrar Auxiliar de soporte </button>
            
            </form>

            </div>
        </div>
    </div>

    
@stop
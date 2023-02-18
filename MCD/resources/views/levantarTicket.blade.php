@extends('plantillaA')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Ticket Levantado Exitosamente',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Levantamiento de ticket </h1>

        <div class="card mb-5">

            <div class="card-header fw-bold">
                Ticket de soporte
            </div>

            <div class="card-body">

                <form class="m-4" method="post" action="">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->

                    <div class="mb-3">
                        <label class="form-label">Confirme quien levanta el ticket:</label>
                        <select class="form-select" name="nombre" aria-label="Default select example">
                            <option disabled selected >Seleccione la opcion con su nombre</option>
                            @foreach ($nombre as $tb_cliente)
                                <option value="{{$tb_cliente['idcli']}}">{{$tb_cliente['nameC']}}</option>
                            @endforeach
                        </select>
                    <p class="text-primary fst-italic" style="color: aqua"> 
                        {{ $errors->first('nombre') }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <label for="text" class="form-label">Seleccione el departamento en el que esta: </label>
                            <select class="form-select" name="departamento" aria-label="Default select example">
                                <option disabled selected >Seleccione un departamento</option>
                                @foreach ($departamento as $tb_departamentos)
                                    <option value="{{$tb_departamentos['idDepartamento']}}">{{$tb_departamentos['nombre']}}</option>
                                @endforeach
                            </select>
                        <p class="text-primary fst-italic" style="color: aqua"> 
                            {{ $errors->first('departamento') }} </p>
                        </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">Problema:</label>
                        <select class="form-select" name="clasificacion" value="{{old('clasificacion')}}" aria-label="Default select example">
                            <option disabled selected> Selecciona uno de los siguientes problemas...</option>
                                <option value="Falla de Office">Falla de Office</option>
                                <option value="Fallas en la red">Fallas en la red</option>
                                <option value="Errores de software">Errores de software</option>
                                <option value="Errores de Hardware">Errores de Hardware</option>
                                <option value="Mantenientos Preventivos">Mantenientos Preventivos</option>
                                <option value="Otro">Otro</option>
                        </select>
                    <p class="text-primary fst-italic" style="color: aqua"> 
                        {{ $errors->first('clasificacion') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Comentario:</label>
                        <input type="text" class="form-control" name="comentariocliente" value="{{old('comentariocliente')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('comentariocliente') }} </p>
                    </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-success m-1"> Registrar Auxiliar de soporte </button>
            
            </form>

            </div>
        </div>
    </div>

    
@stop
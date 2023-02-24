@extends('plantillaA')

@section('contenido')



    <div class="container mt-5 col-md-6">

        <h1 class="display-1 text-center mb-5"> Actualizar estado del ticket </h1>

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
            <form class="m-4" method="post" action="{{route('adminTickets.update', $consultaId->idTicket)}}">    
                @csrf

                {!! method_field('PUT')!!}
                
                <div class="mb-3">
                    <label class="form-label">Confirme quien levanta el ticket:</label>
                    <select class="form-select" name="autor" aria-label="Default select example" value="{{$consultaId->autor}}">
                        <option disabled selected >Seleccione la opcion con su nombre</option>
                   
                        @foreach ($autor as $tb_cliente)
                        <option value="{{$tb_cliente['idcli']}}">{{$tb_cliente['nameC']}}</option>
                        @endforeach
                        
                    </select>
                <p class="text-primary fst-italic" style="color: aqua"> 
                    {{ $errors->first('autor') }} </p>
                </div>

                <div class="mb-3">
                    <label for="text" class="form-label">Seleccione el departamento en el que esta: </label>
                        <select class="form-select" name="departamento" aria-label="Default select example" value="{{$consultaId->departamento}}">
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
                        <input type="text" class="form-control" name="comentarios_cliente" value="{{old('comentarios_cliente')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('comentarios_cliente') }} </p>
                    </div>


                <div>
                    <div class="mb-3">
                        <label class="form-label">Asignar encargado:</label>
                        <select class="form-select" name="encargado" aria-label="Default select example" value="{{old('encargado')}}">
                            <option disabled selected >Seleccione al encargado</option>
                       
                            @foreach ($auxil as $tb_auxiliar)
                            <option value="{{$tb_auxiliar['idaux']}}">{{$tb_auxiliar['nameA']}}</option>
                            @endforeach
                            
                        </select>
                    <p class="text-primary fst-italic" style="color: aqua"> 
                        {{ $errors->first('encargado') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Comentario para el cliente:</label>
                        <input type="text" class="form-control" name="comentarios_al_cliente" value="{{old('comentarios_al_cliente')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('comentarios_al_cliente') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Observaciones al auxiliar:</label>
                        <input type="text" class="form-control" name="observaciones" value="{{old('observaciones')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('observaciones') }} </p>
                    </div>

            </div>

                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary  m-1"> Actualizar datos </button>
            </form>
            </div>

        </div>

    </div>

@stop
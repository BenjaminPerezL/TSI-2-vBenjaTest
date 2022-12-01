@extends('layouts/master')

@section('hojas-estilo')
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
@endsection

@section('contenido-principal')

<div class="p-2">
    <div class="row">
        <div class="col">
            <h3> Cita</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Rut</th>
                        <th>Tipo de servicio</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th colspan="3">Opciones</th>
                    </tr>
                </thead>
                @foreach ($cita as $ct)
                    <tr>
                        <td>
                            {{$ct->rut_cliente}}
                        </td>
                        <td>
                            {{$ct->tipo_servicio}}
                        
                        </td>
                        <td>
                            {{$ct->fecha}}
                        </td>
                        <td>
                            {{$ct->descripcion}}
                        </td>
                        <td>
                            {{$ct->estado}}
                        </td>  
                        <td class="text-center" style="width: 1rem">
                            <form method="POST" action="{{route('cita.destroy',$ct->id)}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Borrar">
                                    <i class="far fa-trash-alt"></i>

                                </button>
                            </form>
                            
                        </td>
                        <td class="text-center" style="width: 1rem">
                            <a href="{{route("cita.edit",$ct->id)}}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Editar cita">
                                <i class="far fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Agregar Cita
                    <div class="card-body">
                        <form method="POST" action="{{route("cita.store")}}">
                            @csrf
                            <div class="form-group">
                                <label for="rut_cliente">Rut:</label>
                                <input type="text" id="rut_cliente" name="rut_cliente" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tipo_servicio">Tipo de servicio:</label>
                                <input type="text" id="tipo_servicio" name="tipo_servicio" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="fecha">Fecha:</label>
                                <input type="text" id = "fecha" name="fecha" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" id = "descripcion" name="descripcion" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info">Aceptar</button>
                                <button class="btn btn-warning">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
            
            
@section('scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
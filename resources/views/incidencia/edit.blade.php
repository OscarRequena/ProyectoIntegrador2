@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Incidencias</h1>
@stop

@section('content')
<form action="/incidencias/{{$incidencia->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id= "nombre" name="nombre" type="text" class="form-control" value="{{$incidencia->nombre}}">
      </div>

    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id= "tipo_incidencia" name="tipo_incidencia" type="text" class="form-control" value="{{$incidencia->tipo_incidencia}}"">
    </div>

      
      <a href="/incidencias" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  </form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
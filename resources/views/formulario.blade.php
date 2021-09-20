@extends('template')

@section('academi')

<form method="post" action="{{route('formstore')}}">
    @csrf
    {!! $errors->first("nombre", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
<div class="mb-3">
    <label for="nombre" class="form-label" >Nombre</label>
    <input type="text" class="form-control" name="nombre" required value = '{{ old("nombre") }}'> 
  </div>
  {!! $errors->first("apellido", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
  <div class="mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido" required value = '{{ old("apellido") }}'>
  </div>
  {!! $errors->first("email", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
  <div class="mb-3">
    <label for="email" class="form-label">Email </label>
    <input type="email" class="form-control" name="email" required value = '{{ old("email") }}'>
  </div>
  <div class="mb-3">
    <label for="edad" class="form-label">Edad </label>
    <input type="text" class="form-control" name="edad" required value = '{{ old("edad") }}'>
  </div>
  {!! $errors->first("telefono", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" required value = '{{ old("telefono") }}'>
  </div>
  {!! $errors->first("programa", '<div class="alert alert-danger" role="alert"> :message  </div>')!!}
  <div class="mb-3">
      <label for="programa" class="form-label" >Programas </label>
      <select name="programa" class="form-select" required value = '{{ old("programas") }}'>
        <option value='Bachillerato'>Bachillerato</option>
        <option value='Ingles'>Ingles</option>
        <option value='Preicfes'>Preicfes</option>
      </select>
    </div>

  
  <button type="submit" class="btn btn-primary" >Enviar</button>
</form>
@endsection
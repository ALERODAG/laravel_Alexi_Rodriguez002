
@extends('layouts.header')


@section('container')

  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class= "card-header car-header-primary ">
                        <div class="card-titlle">
<form action="{{url('/alumnos/'.$alumno->id)}} " method="post" enctype="multipart/form-data" class="edicion">

    {{{ csrf_field() }}}
    {{method_field('PATCH')}}
    <br>

    <br>



<br>
<div class="form-group" style="">
<img src="{{asset('storage').'/'. $alumno->foto}}" alt="" width="300" height="400" class="logo">


<br>
<div class="form-group">
    <br>
    <label class="texto" for="Nombres">Nombres</label>
    <input class="form-control" type="text" name="nombres" id="nombres" value="{{$alumno->Nombres}}">
    </div>
    <br>
      <div class="form-group">

        <label class="texto" for="Apellidos">Apellidos</label>
        <input class="form-control" type="text" name="Apellidos" id="Apellidos" value="{{$alumno->Apellidos}}">
        </div>
    <br>
<div class="form-group">
<label class="texto" for="fechaNacimiento">Fecha de Nacimiento</label>
<input class="form-control" type="text" name="fechaNacimiento" id="fechaNacimiento" value="{{$alumno->fechaNacimiento}}">
</div>
<br>

<div class="form-group">
<label class="texto"  for="sexo">Sexo</label>
<input class="form-control"type="text" name="sexo" id="sexo" value="{{$alumno->sexo}}">
</div>
<br>


<div class="form-group">
<label for="telefono">Telefono</label>
<input class="form-control" type="text" name="telefono" id="telefono" value="{{$alumno->Telefono}}">
</div>

<div class="form-group">
<label for="email">E-mail</label>
<input class="form-control" type="text" name="email" id="email" value="{{$alumno->email}}" >
</div>




</div>

<input class="form-control  " type="file" name="foto" id="foto">
</div>
<br>


<div class="form-group">
<input  class="btn btn-primary" type="submit" value="gardar datos" style="width:30rem">
</div>


</form>
</div>
@endsection

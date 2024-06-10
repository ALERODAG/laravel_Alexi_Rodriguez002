

{{-- {{$modo=='crear' ? 'Agregar Alumno': 'Modificar Empleado'}} --}}
<br>

<div class="form-group">

    <label for="nombres" class="control-label">Nombres</label>
    <input type="text" class="form-control" name="nombres" id="nombre">
<label for="apellidos" class="control-label">Apellidos</label>
<input type="text" name="apellidos" id="apellidos" class="form-control">
</div>

<div class="form-group">
<label for="fechaNacimiento"  class="control-label">Fecha de Nacimiento</label>
<input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control">
</div>

<div class="form-group">
<label for="sexo" class="control-label">Sexo</label>
<input type="text" name="sexo" id="sexo" class="form-control">
</div>

<div class="form-group">
<label class="control-label" for="direccion">Direccion</label>
<input class="form-control" type="text" name="direccion" id="direccion">
<br>


<label class="control-label" for="telefono">Telefono</label>
<input class="form-control" type="text" name="telefono" id="telefono">
</div>

<div class="form-group">
<label class="control-label"for="email">E-mail</label>
<input class="form-control" type="text" name="email" id="email">
</div>

<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input class="form-control" type="text" name="descripcion" id="descripcion">
    </div>


<div class="form-group">
<label for="foto">Foto</label>
@if (isset($alumno->foto))
    <br>
    <img src="{{asset('storage').'/'. $alumno->foto}}" alt="" width="130 " height="150" class="img-thumbnail">
    <br>
@endif
<input class="form-control" type="file" name="foto" id="foto">
</div>
<br>


<div class="form-group">
<input  class="btn btn-primary" type="submit" value="gardar datos">
</div>
</div>




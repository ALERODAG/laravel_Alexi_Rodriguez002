
@extends('layouts.header')


@section('container')
@if (Session::has('mensaje')){{
    Session::get('mensaje')
}}


@endif

<div class="content">

<br>
<div class="menu">
    <a href="{{url('alumnos/create')}}">Agregar Alumno</a>

<a href="{{url('alumnos')}}">Inicio</a>


<table class="table table-hover" >
    <thead class="thead-light">
        <tr class="table-primary">
            <th >Foto</th>
            <th>#</th>
            <th>Nombres</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>E-mail</th>

            <th>Acciones</th>

        </tr>
    </thead>


    <tbody>
        <!--aca se usa un alias que en este caso es as alumno-->
        @foreach ($alumnos as $alumno)
            <tr>
                <td>
                    <img src="{{asset('storage').'/'. $alumno->foto}}" alt="" width="130 " height="150" class="img-thumbnail" img class="img-fluid" src="" alt="">
                </td>

                <td >{{$alumno->id}}</td>
                <td>{{$alumno->Nombres}}
                {{$alumno->Apellidos}}</td>
                <td>{{$alumno->Direccion}}</td>
                <td>{{$alumno->Telefono}}</td>
                <td>{{$alumno->email}}</td>



                <td>
                    <a href="{{url('/alumnos/'.$alumno->id.'/show')}}" class="btn btn-primary">Detalle</a>
                     <a href="{{url('/alumnos/'.$alumno->id.'/edit')}}" class="btn btn-primary">Editar</a>
                    <form action="{{url('/alumnos/'.$alumno->id)}}" method="post" style="display: inline">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('Deseas borrar el registro?')" class="btn btn-danger">Borrar</button>


                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@endsection

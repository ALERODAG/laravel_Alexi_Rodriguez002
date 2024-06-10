
<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.header')


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @section('container')
    <div class="content">


<form action="{{url('/alumnos')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
    <H4 form-group>Formulario de Registro de alumnos</H4>
    @csrf

   @include('alumnos.form',['modo'=>'crear'])

</form>

</div>
</body>
@endsection
</html>


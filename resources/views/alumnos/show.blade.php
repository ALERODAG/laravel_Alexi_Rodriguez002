@extends('layouts.header')
@section('container')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>

<main>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class= "card-header car-header-primary ">
                                <div class="card-titlle">

                                    <p>Vista detallada</p>
                                </div>
                                {{-- body --}}
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card card-user">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                    <div class="author">
                                                        @if ($alumno)
                                                            <img src="{{ $alumno->foto }}" alt="Foto del Alumno">
                                                            <img src="{{ asset('storage') . '/' . $alumno->foto }}"
                                                                alt="" width="400 " height="350"
                                                                class="img-thumbnail" img class="img-fluid" src=""
                                                                alt="">
                                                        @else
                                                            <p>No se encontró el alumno.</p>
                                                        @endif

                                                        </p>


                                                    </div>
                                                    <div class="descripcion">
                                                        <div class="card-descripcion">
                                                            <td>{{ $alumno->Nombres }}
                                                                {{ $alumno->Apellidos }}</td><br>
                                                            {{ $alumno->Direccion }}<br>
                                                            {{ $alumno->sexo }}<br>

                                                        </div>

                                                    </div>


                                                </div>

                                            </div>

                                            <div class="texto">
                                                {{ $alumno->descripcion}}<br>
                                            </div>


                                            <div class="card-footer">
                                                
                                            </div>

                                        </div>

                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>

    @endsection

</main>
</body>

</html>

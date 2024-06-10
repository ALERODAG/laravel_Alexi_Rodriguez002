<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

         @vite(['resources/css/index.css'])
         @vite(['resources/css/matricula.css'])
         @vite(['resources/css/menu.css'])

</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>




</head>

<body>

    <div class="container" >
        <header>

            <nav class="navbar navbar-expand-lg bg-body-primary p-3 mb-2 bg-primary text-white""  style="background-color:#3399ff">
                <img src="{{asset('https://th.bing.com/th/id/OIP.XFfQb2DhriZDJpGmUK64vgHaHa?w=178&h=180&c=7&r=0&o=5&dpr=1.1&pid=1.7')}}" class="card-img-top img-fluid" style="width: 60px;border-radius:2rem">



                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="color: white">SISRED</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="{{ url('alumnos') }}" style="color: white">Inicio</a>
                            <a class="nav-link" href="{{ url('alumnos/inicio') }}" style="color: white">Servicios</a>
                            <a class="nav-link" href="{{ url('alumnos/requisitos') }}" style="color: white">Documentos</a>
                            <a class="nav-link" href="{{ url('alumnos/requisitos') }}" style="color: white">Contactanos</a>
                        </div>
                    </div>
                </div>
            </nav>
        @yield('container')


        <script src="main.js"></script>
        @yield('footer')
        <div class="footer" style="background-color: grey;display:grid; height:70px;width:92%;flex-wrap:wrap;position:initial">
            <p> alexi_rodriguez12@gmail.com  <br>
                Telefono: 3215755477</p>
            </div>


</body>

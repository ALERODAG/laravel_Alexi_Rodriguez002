<!-- resources/views/alumnos/index.blade.php -->

<!DOCTYPE html>
<html>

<body style="padding:0px;margin:0px; ">
    @extends('layouts.header')
    @section('container')

<main style="display: flex; flex-wrap:wrap" >



{{-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --}}

<div class="card " style="width:14rem">
    <img src="{{asset('https://th.bing.com/th/id/OIP.XFfQb2DhriZDJpGmUK64vgHaHa?w=178&h=180&c=7&r=0&o=5&dpr=1.1&pid=1.7')}}" class="card-img-top img-fluid fotografia" >
    <div class="card-body">
      <h5 class="card-title">Informacion Matriculas</h5>
      <p class="card-text">La opcion esta inhabilitada por el momento, no hay cupos en la entidad</p>
      <a href="#" class="btn btn-primary">Matricula 2025</a>
    </div>
  </div>
  {{-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --}}

  <div class="card" style="width:14rem">
    <img src="{{asset('https://th.bing.com/th/id/OIP.IYzellW5siDJTMZVhbkB5AAAAA?w=184&h=180&c=7&r=0&o=5&dpr=1.1&pid=1.7')}}" class="card-img-top img-fluid fotografia">
    <div class="card-body">
      <h5 class="card-title">Registrar datos personales</h5>
      <p class="card-text">Para solicitar Debes estar inscrito</p>
      <a href="#" class="btn btn-primary">Validar Cupo</a>
    </div>
  </div>

  {{-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --}}

  <div class="card" style="width:14rem">
    <img src="https://th.bing.com/th/id/OIP.LPeinTgC2US93cRhwIOsgQHaE8?w=216&h=180&c=7&r=0&o=5&dpr=1.1&pid=1.7" class="card-img-top fotografia" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pre Matricula</h5>
      <p class="card-text">Esta opcion te permite ingresar los datos personales para empezar el proceso de matricula.</p>
      <a href="{{url('alumnos/create')}}" class="btn btn-primary">Pre Matricula</a>
    </div>
  </div>

    {{-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --}}

    <div class="card" style="width:14rem">
    <img src="data:image/jpeg;base64,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" class="card-img-top fotografia" alt="...">
    <div class="card-body">
      <h5 class="card-title">Traslados</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Traslados</a>
    </div>
  </div>

    {{-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --}}

    <div class="card" style="width:14rem">
    <img src="https://th.bing.com/th?id=OIP.dgKBxVjeTxt2pBVF3s4mFQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.1&pid=3.1&rm=2" class="card-img-top  fotografia" alt="...">
    <div class="card-body">
      <h5 class="card-title">Contactanose</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Contactanos</a>
    </div>
  </div>


{{-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --}}
<img src="" class="card-img-top  " alt="...">

</main>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="....."></script>

</body>



</html>

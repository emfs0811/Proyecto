@extends('layouts.base')
@extends('layouts.menuh')
@section('contenido')
<body >
       
<main class="form-signin w-40 m-auto">
  <form>
    
    <h1 class="h3 mb-3 fw-normal"><img img class="imgfooter" src="{{asset('img/ISOTIPO-BDV.png')}}" width="60px" height="60px">Arqfun</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="NM o CT">
      <label for="floatingInput">Usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <button class="btn btn-primary w-40 py-2" type="submit">Inicio de sesion</button>
  </form>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
@endsection
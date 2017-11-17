<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="author" content="grupo #13">
    <meta name="description" content="">
    <title > Gestionar @yield('titulo1')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  </head>
  <body>
    <div class="container-fluid">
     <header class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>Gestion de @yield('titulo2')</h2>
      </div>
     </header>
     <section class="row">
       <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12 col-xs-12">
         @section('contenido')

         @show
       </div>
     </section>
     <footer class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <p>Todos los derechos reservados a Pacman´s Sons :v</p>
       </div>
     </footer>


  </div>
    <script type="text/javascript" src={{ asset('js/bootstrap.min.css') }}></script>
  </body>
</html>

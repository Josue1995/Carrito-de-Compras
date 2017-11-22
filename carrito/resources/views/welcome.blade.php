<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pacman´s Sons</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/one-page-wonder.css')}}" rel="stylesheet">
    
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/4-col-portfolio.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Welcome Pacman´s Sons</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        @if (Route::has('login'))
          <ul class="navbar-nav ml-auto">
          @auth
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/home') }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            @endauth
          </ul>
        @endif
        </div>
      </div>
    </nav>


    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
      </h1>
      <div class="row">
       @forelse($empresa as $emp)
      
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">{{$emp->nombre_empresa}}</a>
              </h4>
              <p class="card-text">{{$emp->direccion_empresa}}</p>
            </div>
          </div>
        </div>
        @empty
        <h1>No hay empresas registradas aún, espere pronto lo habrán</h1>
        @endforelse
      <!-- /.row -->

      <!-- Pagination -->
      
    </div>
    <!-- /.container -->
    <div class="offset-lg-6 offset-md-6 offset-sm-3 offset-xs-3">
    {{$empresa->links()}}
    </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Pacman´s Sons 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  </body>

</html>


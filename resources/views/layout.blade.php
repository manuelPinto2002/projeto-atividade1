<!DOCTYPE html>
@yield('inicio')
<html>

<head>

 @yield('css')
    <link rel="stylesheet" type="text/css" href="{{('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('jumbotrom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('estilosvi.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fa/css/all.css')}}">
<script type="text/javascript" src="{{asset('fa/js/all.js')}}"></script>
   @yield('img')
      
</head>

<body>

@yield('nav')
    <nav  class="navbar navbar-expand-md navbar-blue fixed-top bg-dark" >
<a class="navbar-brand" >Vendas</a>
<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon" ></span>
</button>
<div class="collapse navbar-collapse" id="navbarsExampleDefault" >
    <ul class="navbar-nav mr-auto">
        <li class="=nav-item active">
            <a class="nav-link" href="welcome">Inicio <span class="sr-only">(atual)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="contactos">Contactos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="noticias">noticias</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="empresa">empresa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="onde-estamos">onde-estamos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="formulario">formulario</a>
        </li>

            
            </li>
        </ul>
    </div>
</nav>
@yield('final')




<script src="{{('js/jquery-3.5.1.min.js')}}" type="text/javascript"></script>
<script src="{{('js/bootstrap.min.js')}}" type="text/javascript"></script>
<hr>
    </div> <!--/container-->
</main> 
<footer class="container">
 
</footer>
   <p> &copy; campanha gpsi 2020-2021</p>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
    <title>Especialistas</title>
    <link rel="stylesheet" type="text/css" href="{{('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('jumbotrom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('estilosvi.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fa/css/all.css')}}">
<script type="text/javascript" src="{{asset('fa/js/all.js')}}"></script>
    <style>

    .fundo{
background: url('img/venda.gif');
background-repeat: no-repeat;
 background-size: 50% 50%;
}
.fundo2{
background: url('img/fundo.png');
background-repeat: no-repeat;
 background-size: cover;
}

    
</style>
</head>
<style>

    
</style>
<body>
    
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon" ></span>
</button>
<div class="collapse navbar-collapse" id="navbarsExampleDefault" >
    <ul class="navbar-nav mr-auto">
        <li class="=nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(atual)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Desativado</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">item</a>
                <a class="dropdown-item" href="#">outro item</a>
                <a class="dropdown-item" href="#">algum outro item</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<main class="role">


    <!-- jumbtron para principal mensagem de marketing ou call to action -->
    <div class="jumbotron fundo">
        <div class="container">
            <h1 class="display-3 fundo2" >Especialistas na criação de sites</h1>
            <p class="fundo2" >Loja Online & Marketing Digital</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">saiba mais &raquo;</a></p>
        </div>
    </div>
    <div class="container" >
        <!-- exemplo de linha de colunas-->
<div class="row">
    <div class="col-md-4">
        <h2>Criação de sites <i class="fas fa-atlas icoweb"></i></h2>
        <p>Pretende cria um site com qualidade e criatividade. criamos sites que potenciam negocios .</p>
        <p><a class="btn btn-secondary" href="criacaosite.html" role="button">Ver detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4" >
        <h2>Marketing Digital <i class="fas fa-digital-tachograph icocard"></i></h2>
        <p>Destaque o seu site com campanhas de marketing digital no google e no facebook.</p>
        <p><a class="btn btn-secondary" href="marketing.html" role="button">Ver detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4" >
        <h2>Design <i class="fas fa-palette icodes"></i></h2>
        <p>Uma imagem criativa permite potenciar e diferenciar o seu negocio. Criamos logotipos que marcam.</p>
        <p><a class="btn btn-secondary" href="design.html" role="button">Ver detalhes &raquo;</a></p>
    </div>
</div>
<hr>
    </div> <!--/container-->
</main> 
<footer class="container">
    <p> &copy; campanha gpsi 2020-2021</p>
</footer>
<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
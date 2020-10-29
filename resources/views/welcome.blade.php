@extends('layout')
<html>
@section('links')
<head>
    <title>Especialistas</title>
   
    <style>

    .fundo{
background: url('img/venda.gif');
background-repeat: no-repeat;
 background-size: 50% 100%;
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
    
 @section('nav')
@endsection
@section('conteudo')

<main class="role">


    <!-- jumbtron para principal mensagem de marketing ou call to action -->
    <div class="jumbotron fundo">
        <div class="container">
            <h1 class="display-3 fundo2" >Indice</h1>
            <p class="fundo2" >Indice desta pagina</p>
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
 
</footer>
</body>
</html>
@endsection
@endsection
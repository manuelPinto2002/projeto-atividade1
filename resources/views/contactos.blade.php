@extends('layout')
@section('inicio')

<head>
    <title>Especialistas</title>
   
    <style>

    .fundo{
background: url('img/contactos.jpg');
background-repeat: no-repeat;
 background-size: 100% 100%;
}
.fundo2{
background: url('img/fundo.png');
background-repeat: no-repeat;
 background-size: cover;
}

</style>
</head>
    
 @section('nav')
@endsection
@section('final')
@endsection


<main class="role">


    <!-- jumbtron para principal mensagem de marketing ou call to action -->
    <div class="jumbotron fundo">
        <div class="container">
            <h1 class="display-3 fundo2" >Nossos concactos</h1>
            <p class="fundo2" ></p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">saiba mais &raquo;</a></p>
        </div>
    </div>
    <div class="container" >
        <!-- exemplo de linha de colunas-->
<div class="row">
    <div class="col-md-4">
        <h2>telemovel<i class="fas fas fa-phone-alt"></i></h2>
        <p>915646466</p>

        <p><a class="btn btn-secondary" href="criacaosite.html" role="button">Ver detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4" >
        <h2>telefone <i class="fas fas fa-mobile-alt"></i></h2>
        <p>255155415</p>
        <p><a class="btn btn-secondary" href="marketing.html" role="button">Ver detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4" >
        <h2>local rua <i class="fas fa-palette icodes"></i></h2>
        <p>rua qim do rio do queixo</p>
        <p><a class="btn btn-secondary" href="design.html" role="button">Ver detalhes &raquo;</a></p>
    </div>
</div>
</div>
</main>


@endsection
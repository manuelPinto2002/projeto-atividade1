@extends('layout')
@section('inicio')

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
    
 @section('nav')
@endsection
@section('final')
@endsection

<main class="role">


    <!-- jumbtron para principal mensagem de marketing ou call to action -->
    <div class="jumbotron fundo">
        <div class="container">
            <h1 class="display-3 fundo2" >Índice</h1>
            <p class="fundo2" >Índice desta pagina</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">saiba mais &raquo;</a></p>
        </div>
    </div>
    <div class="container" >
        <!-- exemplo de linha de colunas-->

</div>
</div>
</main>

@endsection

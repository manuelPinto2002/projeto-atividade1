@extends('layout')
@section('inicio')
    <style>

    .fundo{
background: url('img/formulario.png');
background-repeat: no-repeat;
 background-size: 100% 100%;
}
.fundo2{
background: url('img/fundo.png');
background-repeat: no-repeat;
 background-size: cover;
}

</style>
 @section('nav')
@endsection
@section('final')
@endsection
<main class="role">


    <!-- jumbtron para principal mensagem de marketing ou call to action -->
    <div class="jumbotron fundo">
        <div class="container">
            <h1 class="display-3 fundo2" >Formulario Enviado<i class="fas fa-atlas icoweb"></i></h1>
            <p class="fundo2" >Pagina formulario enviado</p>
            
        </div>
    </div>
    <div class="container" >
        <!-- exemplo de linha de colunas-->
<div class="row">
    <div class="col-md-4">
<p>Nome: </p> {{$nome}}<br>
<p>Morada: </p>{{$morada}}<br>
<p>Carro: </p> {{$automovel}}<br>
<p>Casa venda: </p> {{$casa ?? ''}}
    </div>
   
   
</div>
</div>
</main>
@endsection
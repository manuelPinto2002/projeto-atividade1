@extends('layout')
@section('inicio')
    <style>

    .fundo{
background: url('img/vendas.png');
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
            <h1 class="display-3 fundo2" >Empresa<i class="fas fa-atlas icoweb"></i></h1>
            <p class="fundo2" >Sobre Nos</p>
             <p class="fundo2" >Nos vendemos casas, carros, etc..</p>
              <p class="fundo2" >Vendas recentes</p>
        </div>
    </div>
    <div class="container" >
        <!-- exemplo de linha de colunas-->
<div class="row">
    <div class="col-md-4">
        <h2>Vendas </h2>
        <p>Venda de F-35 aos EAU</p>
        
    </div>
    <div class="col-md-4" >
        <h2>Vendas</h2>
        <p>Mansao a venda</p>
     
    </div>

   
</div>
</div>
</main>
@endsection
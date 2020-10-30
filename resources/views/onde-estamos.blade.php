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
            <h1 class="display-3 fundo2" >Onde Estamos<i class="fas fa-atlas icoweb"></i></h1>
            <p class="fundo2" >Tamos em todo Portugal</p>
             <p class="fundo2" >E no mundo</p>

        </div>
    </div>
    <div class="container" >
        <!-- exemplo de linha de colunas-->
<div class="row">
   
    <div class="col-md-4" >
        <h2>Local 1</h2>
        <p>Rua Joao Pinto n699 Guimarães</p>
  
    </div>
     <div class="col-md-4" >
        <h2>local 2 <i class="fas fa-palette icodes"></i></h2>
        <p>irlndice do you traves N919 Inglaterra</p>
    </div>
   
</div>
</div>
</main>
@endsection
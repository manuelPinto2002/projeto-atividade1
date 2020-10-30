@extends('layout')
@section('inicio')
    <style>

    .fundo{
background: url('img/jornal.jpg');
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
            <h1 class="display-3 fundo2" >Noticias<i class="fas fa-atlas icoweb"></i></h1>
            <p class="fundo2" >Pagina Noticias</p>
            
        </div>
    </div>
    <div class="container" >
        <!-- exemplo de linha de colunas-->
<div class="row">
    <div class="col-md-4">
        <h2><img src="img/f1.png"> </h2>
        <p>Venda de F-35 aos EAU. Democratas dos EUA receiam desequilíbrio de forças no Médio Oriente.</p>
        <p><a class="btn btn-secondary" href="https://www.rtp.pt/noticias/mundo/venda-de-f-35-aos-eau-democratas-dos-eua-receiam-desequilibrio-de-forcas-no-medio-oriente_n1271234" role="button">Ver detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4" >
        <h2><img src="img/filha.png"></h2>
        <p>Homem fazia filhos para venda e não escapa à cadeia.</p>
        <p><a class="btn btn-secondary" href="https://www.cmjornal.pt/portugal/amp/fazia-filhos-para-venda-e-nao-escapa-a-cadeia" role="button">Ver detalhes &raquo;</a></p>
    </div>
   
</div>
</div>
</main>
@endsection
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
            <h1 class="display-3 fundo2" >Formulario</h1>
            <p class="fundo2" >Formulario desta pagina</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">saiba mais &raquo;</a></p>
        </div>
    </div>
    <div class="container" >
        <!-- exemplo de linha de colunas-->
<div class="row">
    <div class="col-md-4">
<form method="post" action="{{route('processar.form')}}">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome">
    <br>
    <label for="morada">Morada</label>
    <input type="text" name="morada">
    
    <br>
    <label for="automovel">Automóvel</label>
    <select name="automovel">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
    </select>
    <br>
    <button type="submit">Enviar</button>
</form>
    </div>
<div class="row">
    <div class="col-md-4">
           </div>
</div>
</div>
</main>

@endsection

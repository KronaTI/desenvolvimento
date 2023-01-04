@extends('layouts.main')

@section('title', 'AGM Solutions')

@section('content')

<div class="container-esquerda">
    <h2 class="tt-manuais"> Ramais Krona </h2>

    <a href="/docs/ramais-ti.pdf" target="janela" class="link-util">T.I</a><br><br>
    <a href="#" target="janela" class="link-util">ADM / Financeiro / RH / Compras</a><br><br>
    <a href="#" target="janela" class="link-util">Central Compartilhada</a><br><br>
    <a href="#" target="janela" class="link-util">Central Pamsat I e II</a><br><br>
    <a href="#" target="janela" class="link-util">Central Krona Oeste</a><br><br>
    <a href="#" target="janela" class="link-util">Projetos</a><br><br>
    <a href="#" target="janela" class="link-util">Configuração / Qualidade</a><br><br>
    <a href="#" target="janela" class="link-util">Diretoria / Gerência</a><br><br>

</div>

<div class="container-direita" id="container-direita">
    <iframe id="janela" name="janela">

    </iframe>

</div>



@endsection
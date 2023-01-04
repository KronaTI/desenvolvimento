@extends('layouts.main')

@section('title', 'Manuais de Treinamento')




@section('content')

    <div class="container-esquerda">
        <h2 class="tt-manuais"> Manuais Krona </h2>
    
        <a href="/docs/codigos.pdf" target="janela">Códigos Importantes</a>
        <a href="#" target="janela"></a>
        <a href="#" target="janela"></a>
        <a href="#" target="janela"></a>
        <a href="#" target="janela"></a>
        <a href="#" target="janela"></a>
        <a href="#" target="janela"></a>
    </div>
    
    <div class="container-direita" id="container-direita">
        <iframe id="janela" name="janela">

        </iframe>
    
    </div>



@endsection

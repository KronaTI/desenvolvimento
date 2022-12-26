@extends('layouts.main')

@section('title', 'AGM Solutions')



@section('content')
    
        <form class="form-principal"  method="post" action="#">
            <h1 class="titulo-formulario">Teste de Conhecimento - Krona One e procedimentos</h1>

            <label class="rotulos-dados">Nome Completo:</label>
            <input type="text" class="info-dados" placeholder="Digite seu nome completo" autocomplete="off" id="nome" name="nome">
            <label class="rotulos-dados">CPF:</label>
            <input type="text" class="info-dados" placeholder="Digite seu CPF apenas numeros" autocomplete="off" id="cpf" name="cpf"><br>
            <label class="rotulos-dados">Data:</label>
            <input type="date" class="info-dados" placeholder="Informe a data" autocomplete="off" id="data" name="data">
            <label class="rotulos-dados">Nome do Avaliador:</label>
            <input type="text" class="info-dados" placeholder="Quem é o examinador?" autocomplete="off" id="cpf" name="cpf"><br>
   
        </form>
    </div>

@endsection

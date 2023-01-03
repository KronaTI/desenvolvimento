@extends('layouts.main')

@section('title', 'Avaliação Krona One')



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
            <select class="info-dados" name="instrutor">
                <option>Selecione o Instrutor</option>
                <option>Daniel Fonseca</option>
                <option>Michelle Mello</option>
            </select>
            <hr class="linha">
            
   
        
            <input type="submit" class="btn btn-outline-primary" value="Salvar Dados">
        </form>
    </div>

@endsection

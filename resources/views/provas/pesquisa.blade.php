@extends('layouts.main')

@section('title', 'Pesquisa de Satisfação')

@section('content')
    
        <form class="form-pesquisa"  method="post" action="#">
            <h1 class="titulo-formulario">Pesquisa de Satisfação - Departamento de T.I.</h1>

            <label class="rotulos-dados">Nome Completo:</label>
            <input type="text" class="info-dados" placeholder="Digite seu nome completo" autocomplete="off" id="nome" name="nome">
            <label class="rotulos-dados">CPF:</label>
            <input type="text" class="info-dados" placeholder="Digite seu CPF apenas numeros" autocomplete="off" id="cpf" name="cpf"><br>
            <label class="rotulos-dados">Data:</label>
            <input type="date" class="info-dados" placeholder="Informe a data" autocomplete="off" id="data" name="data">
        
            <hr>
            <label class="perguntas">Pesquisa de satisfação - Atendimento do T.I. </label><br>
            <label class="alternativas">01 - Como você avalia o tempo de retorno de um chamado?</label>
            <input class="dados" type="number" autocomplete="off" id="resp-um" name="resp-um">
            <label class="alternativas">02 - Como você avalia o atendimento pessoal?</label>
            <input class="dados" type="number" autocomplete="off" id="resp-dois" name="resp-dois">
            <label class="alternativas">03 - Como você avalia a estrutura do departamento?</label>
            <input class="dados" type="number" autocomplete="off" id="resp-tres" name="resp-tres">
            <label class="alternativas">04 - Qual é sua avalição para o GLPI nas aberturas de chamado?</label>
            <input class="dados" type="number" autocomplete="off" id="resp-quatro" name="resp-quatro">
            <input type="submit" class="btn btn-outline-primary" value="Salvar Dados"><br>
            <p class="legenda">*** Utilize: 1 para ruim / 2 para regular / 3 para bom / 4 para ótimo ***</p>

        </form>
    </div>

@endsection
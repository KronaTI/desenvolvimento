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
            <hr>
            
    <label class="perguntas">1 - Em sua opinião o registro de não conformidade é obrigatória? Qual a importância?</label><br>
        <input class="dados" type="radio" id="a" name="alternativas" value="A">    
        <label class="alternativas" for="a" >a - Sim, pois sem a NC a viagem não pode ser encerrada;</label><br>
        <input class="dados" type="radio" id="b" name="alternativas" value="B">
        <label class="alternativas" for="b">b - Não, pois a NC não é pertinente para o rastreamento;</label><br>
        <input class="dados" type="radio" id="a" name="alternativas" value="C">
        <label class="alternativas" for="c">c - Sim, pois a NC é um regisro de tudo que acontece na viagem para o nosso gestor;</label><br>
        <input class="dados" type="radio" id="d" name="alternativas" value="D">
        <label class="alternativas" for="d">d - Sim, pois a NC é um registro de tudo que acontece na viagem para o nosso cliente;</label><br>
        <input class="dados" type="radio" id="e" name="alternativas" value="e">
        <label class="alternativas" for="e">e - Não, pios não faz parte do processo de gerenciamento de risco;</label><br><br>
            <hr class="linha">
        <label class="perguntas">2 - Em qual situação devemos localizar o veículo no mapa Krona One e/ou na tecnologia?</label><br>
        <input class="dados" type="radio" id="a" name="alternativas-b" value="A">    
        <label class="alternativas-b" for="a" >a - Quando o condutor inicia e finaliza a viagem, em todas as paradas com macro ou indevida, e quando gera alerta suspeito.</label><br>
        <input class="dados" type="radio" id="b" name="alternativas-b" value="B">
        <label class="alternativas-b" for="b">b - Somente quando gera alerta suspeito e nas paradas de almoço e pernoite.</label><br>
        <input class="dados" type="radio" id="a" name="alternativas-b" value="C">
        <label class="alternativas-b" for="c">c - Somente quando o condutor inicia a viagem, gera alerta suspeito e quando ele finaliza a viagem.</label><br>
        <input class="dados" type="radio" id="d" name="alternativas-b" value="D">
        <label class="alternativas-b" for="d">d - Quando o condutor finaliza a viagem, gera alerta suspeito ou para sem informar.</label><br>
        <input class="dados" type="radio" id="e" name="alternativas-b" value="e">
        <label class="alternativas-b" for="e">e - Somente quando gera alerta suspeito, parada indevida ou quando finaliza a viagem.</label><br><br>
            <hr class="linha">
        <label class="perguntas">3 - Uma das ocorrências do Krona One tem o nome de "parada estendida". Assinale qual alternativa define sua geração.</label><br>
        <input class="dados" type="radio" id="a" name="alternativas" value="A">    
        <label class="alternativas" for="a" >a - Acontece quando o condutor fica mais de 2 horas parado sem informar e não é lida a ocorrência no Krona One.</label><br>
        <input class="dados" type="radio" id="b" name="alternativas" value="B">
        <label class="alternativas" for="b">b - Acontece quando o condutor manda parada eventual e a ocorrência não é lida entre 1 a 2 horas dependendo da operação no Krona One.</label><br>
        <input class="dados" type="radio" id="a" name="alternativas" value="C">
        <label class="alternativas" for="c">c - Acontece quando o condutor manda parada programada e a ocorrência não é lida dentro de 1 hora no Krona One.</label><br>
        <input class="dados" type="radio" id="d" name="alternativas" value="D">
        <label class="alternativas" for="d">d - Acontece quando o condutor manda parada programada e a ocorrência não é lida dentro de 1 a 2 horas no Krona One.</label><br>
        <input class="dados" type="radio" id="e" name="alternativas" value="e">
        <label class="alternativas" for="e">e - Acontece quando o condutor manda parada eventual e a ocorrência não é lida dentro de 2 horas no Krona One.</label><br><br>
            <hr class="linha">
        <label class="perguntas">4 - A coluna "RISCO" na aba dos veículos "EM VIAGEM" está associado a:.</label><br>
        <input class="dados" type="radio" id="a" name="alternativas" value="A">    
        <label class="alternativas" for="a" >a - EVENTO.</label><br>
        <input class="dados" type="radio" id="b" name="alternativas" value="B">
        <label class="alternativas" for="b">b - OCORRÊNCIA.</label><br>
        <input class="dados" type="radio" id="a" name="alternativas" value="C">
        <label class="alternativas" for="c">c - STATUS VEÍCULO.</label><br>
        <input class="dados" type="radio" id="d" name="alternativas" value="D">
        <label class="alternativas" for="d">d - REGISTROS.</label><br>
            <hr class="linha">
        <label class="perguntas">5 - Assinale a alternativa que melhor define o que é uma "OCORRENCIA".</label><br>
        <input class="dados" type="radio" id="a" name="alternativas" value="A">    
        <label class="alternativas" for="a" >a - É um alerta para o operador de um evento ou mensagem que o Krona One reconhece através da integração com a tecnologia.</label><br>
        <input class="dados" type="radio" id="b" name="alternativas" value="B">
        <label class="alternativas" for="b">b - É um alerta que o Krona One emite quando gera uma não conformidade.</label><br>
        <input class="dados" type="radio" id="a" name="alternativas" value="C">
        <label class="alternativas" for="c">c - É um alerta gerado no Krona One através dos comandos que o operador envia.</label><br>
        <input class="dados" type="radio" id="d" name="alternativas" value="D">
        <label class="alternativas" for="d">d - É um alerta gerado pelo Krona One na aba de Status.</label><br>
        <input class="dados" type="radio" id="e" name="alternativas" value="e">
        <label class="alternativas" for="e">e - É um alerta gerado pelo Krona One após identificar o histórico de viagens.</label><br><br>
            <hr class="linha">
        <label class="perguntas">6 - Assinale a alternativa que melhor define <strong>CTO</strong>.</label><br>
        <input class="dados" type="radio" id="a" name="alternativas" value="A">    
        <label class="alternativas" for="a" >a - Centro de tratativa de ocorrência, setor de apoio que atua após o inicio da viagem.</label><br>
        <input class="dados" type="radio" id="b" name="alternativas" value="B">
        <label class="alternativas" for="b">b - Centro de tratativa de ocorrência, setor de apoio que atua antes de uma irregularidade.</label><br>
        <input class="dados" type="radio" id="a" name="alternativas" value="C">
        <label class="alternativas" for="c">c - Centro de tratativa de ocorrência, setor de apoio que atua após a identificação de alguma macro.</label><br>
        <input class="dados" type="radio" id="d" name="alternativas" value="D">
        <label class="alternativas" for="d">d - Central de tratativa de ocorrência, setor de apoio que atua após a primeira tratativa do operador referente a algum evento de forte suspeita.</label><br>
        <input class="dados" type="radio" id="e" name="alternativas" value="e">
        <label class="alternativas" for="e">e - Central de tratativa de ocorrência setor de apoio que atua após a chegada no cliente do veículo.</label><br><br>
            <hr class="linha">
        
            <input type="submit" class="btn btn-outline-primary" value="Salvar Dados">
        </form>
    </div>

@endsection

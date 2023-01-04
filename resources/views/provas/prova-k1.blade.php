<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilo.css">
     <!-- Font da Aplicação -->
     <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

     <!-- Bootstrap da Aplicação -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

     <!-- Scripts da Aplicação -->
     <script href="/js/scripts.js"></script>
</head>
<body>
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
</body>
</html>
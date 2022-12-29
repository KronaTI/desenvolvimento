@extends('layouts.main')

@section('title', 'Cadastro de Usuários')



@section('content')

    
<form id="form-ramal" method="post" action>
    <h1 class="titulo-formulario"> Cadastro de Ramais</h1>
    <label class="rotulo">Telefone:</label>
    <input type="text" id="telefone" name="telefone" class="dado" maxlength="13" placeholder="(XX)0000-0000" autocomplete="off"><br>
    <label class="rotulo">Ramal para atendimento:</label>
    <input type="text" id="ramal" name="ramal" class="dado" maxlength="6" placeholder="Digite o ramal" autocomplete="off"><br>
    <label class="rotulo">Informe a Central:</label>
    <select class="dado" id="central" name="central">
        <option>Central Compartilhada</option>
        <option>Central Pamsat I</option>
        <option>Central Pamsat II</option>
        <option>Central Krona Oeste</option>
        <option>ADM / RH / DP / Financeiro</option>
        <option>Gerência</option>
        <option>Suporte T.I.</option>
    </select>
    <label class="rotulo">Informações:</label>
    <textarea class="informes" name="informe" id="informe" cols="50" rows="4">

    </textarea>
    <input type="submit" class="btn btn-outline-primary" value="Cadastrar Ramal">
</form>

@endsection

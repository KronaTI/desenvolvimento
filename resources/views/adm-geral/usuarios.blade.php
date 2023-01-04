@extends('layouts.main')

@section('title', 'Cadastro de Usuários')



@section('content')

    
<form id="form" method="post" action>
    <h1 class="titulo-formulario"> Cadrastro do Usuário</h1>
    <label class="rotulo">Nome do Usuário:</label>
    <input type="text" class="dado" maxlength="50" placeholder="Nome do Usuário" autocomplete="off"><br>
    <label class="rotulo">CPF do Usuário:</label>
    <input type="text" id="cpf" name="cpf" class="dado" maxlength="14" placeholder="CPF somente os numeros" autocomplete="off"><br>
    <label class="rotulo">Digite sua senha:</label>
    <input type="password" class="dado" maxlength="6" placeholder="Senha" autocomplete="off"><br>
    <label class="rotulo">Confirme sua senha:</label>
    <input type="password" class="dado" maxlength="6" placeholder="Confirme sua Senha" autocomplete="off"><br>
    <input type="submit" class="btn btn-outline-primary" value="Cadastrar Usuário">
    <p class="acesso-cadastro">Já tem cadastro? <a href="/acesso"> Clique Aqui!</a></p>
</form>

@endsection

@extends('layouts.main')

@section('title', 'Acesso ao Sistema')



@section('content')

<form class="form-acesso" method="get" action="#">
    
    <label class="rotulo-acesso">Login de Acesso:</label><br>
    <input class="dados-acesso" type="text" name="login" autocomplete="off" autofocus="true" placeholder="Informe o login"><br>
    
    <label class="rotulo-acesso">Senha de Acesso:</label><br>
    <input class="dados-acesso" type="password" name="senha" maxlength="6" autocomplete="off" placeholder="Informe a senha">

    <input class="btn btn-outline-warning" type="submit" name="botao" value="Acessar">
    <p class="acesso-cadastro">Para um novo cadastro <a href="/adm-geral/usuarios"> Clique Aqui!</a></p>
</form>
        

@endsection

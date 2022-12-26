@extends('layouts.main')

@section('title', 'AGM Solutions')

@section('content')
<hr class="linha">
<form method="post" action="" class="form">
<div class="container-fluid">
    <h1 >AVALIAÇÃO DO TREINADOR</h1>
    <table class="table table-bordered" colormap="1" cellspacing="2">
        <thead>
          <tr>
            <th scope="col">TREINAMENTO</th>
            <th scope="col">TREINAMENTO OPERACIONAL PARA INICIANTES</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">INICIO DO TREINAMENTO</th>
            <td ><input type="date"></td>
            <th scope="row">ENCERRAMENTO DO TREINAMENTO</th>
            <td ><input type="date"></td>
          </tr>
          <tr>
            <th scope="row">INSTRUTOR</th>
            <td><select>
              <option>&nbsp;*** INSTRUTOR SELECIONADO ***&nbsp;</option>
              <option>&nbsp;DANIEL FONSECA</option>
              <option>&nbsp;MICHELLE MELLO </option>
            </select> </td>
          </tr>
          <tr>
            <th scope="row">PARTICIPANTE</th>
            <td colspan="2"></td>
          </tr>
        </tbody>
      </table>
      
      
      
      <br>
      <table class="table table-bordered" colormap="1" cellspacing="2">
        <thead>
          <tr>
            <th scope="col" width="300px">1 - TREINAMENTO</th>
            <th scope="col" width="300px"><h4 class="legenda">Utilizando: 1 - péssimo / 2 - ruim / 3 - Regular / 4 - bom / 5 - ótimo</h4></th>
          </tr>
          <tr>
            <th scope="col" width="300px">A - Atendeu suas expectativas</th>
            <th scope="col" width="300px">hhh</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="col" width="300px">B - Teve carga horária suficiente</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="300px">C - Teve conteúdo adequado aos objetivos propostos</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="300px">D - Associou teoria e prática</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="300px">OBSERVAÇÃO</th>
            <td scope="col" width="300px" >COMENTÁRIOS DO PARTICIPANTE</td>
          </tr>
        </tbody>
      </table>
      <br>

      
      <table class="table table-bordered" colormap="1" cellspacing="2">
        <thead>
          <tr>
            <th scope="col" width="300px">2 - MATERIAL UTILIZADO</th>
            <th scope="col" width="300px"><h4 class="legenda">Utilizando: 1 - péssimo / 2 - ruim / 3 - Regular / 4 - bom / 5 - ótimo</h4></th>
          </tr>
          <tr>
            <th scope="col" width="300px">A - Foi adequado aos objetivos e conteúdos do curso</th>
            <th scope="col" width="300px">hhh</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="col" width="300px">B - Teve carga horária suficiente</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="300px">C - Teve conteúdo adequado aos objetivos propostos</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="300px">D - Associou teoria e prática</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="300px">OBSERVAÇÃO</th>
            <td scope="col" width="300px" >COMENTÁRIOS DO PARTICIPANTE</td>
          </tr>
        </tbody>
      </table>
      <br>
      
      <table class="table table-bordered" colormap="1" cellspacing="2">
        <thead>
          <tr>
            <th scope="col" width="300px">3 - AVALIAÇÃO DO INSTRUTOR</th>
            <th scope="col" width="300px"><h4 class="legenda">Utilizando: 1 - péssimo / 2 - ruim / 3 - Regular / 4 - bom / 5 - ótimo</h4></th>
          </tr>
          <tr>
            <th scope="col" width="300px">A - Demonstrou domínio e segurança nos conteúdos</th>
            <th scope="col" width="300px">hhh</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="col" width="300px">B - Associou os conteúdos a realidade, proporcionando relação entre teoria e prática</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="300px">C - Foi pontual?</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="300px">D - Cumpriu a carga horária prevista?</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
          <tr>
            <th scope="col" width="300px">E - Foi organizado?</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="300px">F - Demonstrou entusiasmo ao ministrar a disciplina?</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
            <th scope="col" width="300px">OBSERVAÇÃO</th>
            <td scope="col" width="300px" >COMENTÁRIOS DO PARTICIPANTE</td>
          </tr>
        </tbody>
      </table>
      <br>

      <table class="table table-bordered" colormap="1" cellspacing="2">
        <thead>
          <tr>
            <th scope="col" width="300px">4 - AUTO AVALIAÇÃO</th>
            <th scope="col" width="300px"><h4 class="legenda">Utilizando: 1 - péssimo / 2 - ruim / 3 - Regular / 4 - bom / 5 - ótimo</h4></th>
          </tr>
          <tr>
            <th scope="col" width="300px">A - Você realizou as tarefas propostas pelo instrutor?</th>
            <th scope="col" width="300px">hhh</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="col" width="300px">B - Você foi pontual no início do treinamento / Curso?</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="300px">C - Você foi pontual no retorno dos intervalos?</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="300px">D - Você permaneceu diariamente até o final do treinamento / curso?</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
          <tr>
          <tr>
            <th scope="col" width="300px">E - Você participou questionando, debatendo, criticando e emitindo opiniões?</th>
            <td scope="col" width="300px" >hhh</td>
          </tr>
            <th scope="col" width="300px">OBSERVAÇÃO</th>
            <td scope="col" width="300px" >COMENTÁRIOS DO PARTICIPANTE</td>
          </tr>
        </tbody>
      </table>
      <br>
    </form>
</div>




    


@endsection

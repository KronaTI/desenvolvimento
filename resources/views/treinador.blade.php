@extends('layouts.main')

@section('title', 'AGM Solutions')

@section('content')
<hr class="linha">
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
            <th scope="col" width="600px">A - Atendeu suas expectativas</th>
            <th scope="col" width="20px">hhh</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="col" width="600px">B - Teve carga horária suficiente</th>
            <td scope="col" width="20px" >hhh</td>
          </tr>
          <tr>
            <th scope="col" width="600px">C - Teve conteúdo adequado aos objetivos propostos</th>
            <td scope="col" width="20px" >hhh</td>
          </tr>
        </tbody>
      </table>
      <br>

</div>




    


@endsection

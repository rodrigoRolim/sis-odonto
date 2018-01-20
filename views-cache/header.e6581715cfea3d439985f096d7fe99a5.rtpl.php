<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Odonto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    footer{
      background-color:black;
      color:white;
      text-align: center;
    }
  </style>
</head>
<body>

<!-- MENU INÍCIO -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Clínica Dra. Regina</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Início</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cad_paciente.html">Pacientes</a></li>
		   <li><a href="cad_consulta.html">Consultas</a></li>
          <li><a href="cad_contas_receber.html">Contas à Receber</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Relatórios<span class="caret"></span></a>
        <ul class="dropdown-menu">
		  <li><a href="rel_paciente.html">Paciente</a></li>
		  <li><a href="rel_paciente_todos.html">Todos os Pacientes</a></li>
          <li><a href="rel_contas_receber.html">Contas à Receber</a></li>
		  <li><a href="rel_consulta.html">Consultas</a></li>
 		  <li><a href="rel_consulta_retorno.html">Retorno de Consultas</a></li>
		  <li><a href="rel_aniversario.html">Aniversários</a></li>
        </ul>
      </li>
	  
      <li><a href="#">Page 2</a></li>
      <li><a href="/logout">Sair</a></li>
    </ul>
  </div>
</nav>
<!-- MENU FIM --> 
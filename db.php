<?php

$servidor = "localhost";
$usuario ="root";
$senha="";
$db = "aula_php";

$conexao = mysqli_connect($servidor,$usuario, $senha,$db);

$query = "SELECT * FROM DISPOSITIVOS";
$consulta = mysqli_query($conexao, $query);
<?php
$server = "localhost";	
$user = "root";
$password = "root";
$conexao = new mysqli($server, $user, $password);
$banco = "USE bd_atividade";
$conexao -> query($banco);
?>
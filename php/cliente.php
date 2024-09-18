<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$nrendereco = $_POST['numero'];

include 'conexao.php';
$insert_cliente = "INSERT INTO cliente 
    VALUES  (NULL, '$nome','$sobrenome','$email','$telefone','$endereco','$nrendereco')";

$result = $conexao->query($insert_cliente);
if ($result){
    echo "deu certo";
}


?>
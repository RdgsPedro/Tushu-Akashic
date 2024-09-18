<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cargo = $_POST['cargo'];
$dtnas = $_POST['dtnas'];
$salario = $_POST['salario'];
$dtem = $_POST['dtem'];
$senha = $_POST['senha'];


include 'conexao.php';
$insert_funcionario = "INSERT INTO funcionario 
    VALUES  (NULL, '$nome','$sobrenome','$cargo','$dtnas','$salario','$dtem','$senha')";

result = $conexao->query($insert_funcionario);
    if ($result){
        echo "deu certo"
    }


?>
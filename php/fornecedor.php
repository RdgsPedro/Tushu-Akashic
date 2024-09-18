<?php
$nome = $_POST['nome'];
$contato = $_POST['contato'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];

include 'conexao.php';
$insert_fornecedor = "INSERT INTO fornecedor 
    VALUES  (NULL, '$nome','$contato','$email','$telefone','$endereco','$numero')";

$result = $conexao->query($insert_fornecedor);
if ($result){
    echo "deu certo";
};
?>
<?php
//pegar os dados do formulario e armazenar na variavel

$registro_user = $_POST["registro"];
$senha_user = $_POST["senha"];

//Fazer a conexão com o banco de dados

include 'conexao.php';

$select = "SELECT * FROM funcionario
           WHERE id_funcionario = $registro_user";

$query = $conexao->query($select);

$resultado = $query->fetch_assoc();


$registro_user_banco = $resultado['id_funcionario'];
$id_senha_banco = $resultado['senha'];

if ($registro_user == $registro_user_banco && $senha_user == $id_senha_banco) {
    header('location: ../Home.html');
}else{
    echo "<script>alert('usuario ou senha invalidos'); history.back() </script>";
}

?>
<?php
include("conexao.php");



$nome = $_POST['nome'];
$genero = $_POST['genero'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$status = $_POST['status'];
$cidade = $_POST['cidade'];


$sql = "INSERT INTO usuario(nome, genero, email, senha, status, cidade)
VALUES('$nome', '$genero','$email', '$senha', '$status', '$cidade')";

if(mysqli_query($conexao, $sql)){

    header("Location: listarAluno.php");
}else{
    echo "Erro". mysqli_connect_error($conexao);
}

mysqli_close($conexao);

?>
<?php
include("conexao.php");
$nome = $_POST['nome'];

$email = $_POST['email'];
$senha = $_POST['senha'];
$status = $_POST['status'];

$sql = "INSERT INTO usuario(nome, email, senha, status)
VALUES('$nome', '$email', '$senha', '$status')";

if(mysqli_query($conexao, $sql)){
	echo "Cadastro com sucesso";
}else{
	echo "Erro". mysqli_connect_error($conexao);
}

mysqli_close($conexao);

?>
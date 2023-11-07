<?php
$servididor="localhost";
$usuario="root";
$Senha="";
$dbname="biblioteca";

$conexao= mysqli_connect($servididor, $usuario, $Senha, $dbname);
if(!$conexao){
	die("Houve Erro: " .mysqli_connect_error());
}
?>

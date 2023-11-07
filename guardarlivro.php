<?php
include("protecao.php");
include("conexao.php");

if(isset($_FILES['img'])){
	$img = $_FILES['img'];

}

if($img['error']) {
	// code...
	die("Falha ao enviar arquivo");
}


$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$data1 = $_POST['data1'];
$volume = $_POST['volume'];



$pasta = "../assets/upload/";
$nomeDoArquivo = $img['name'];
$novoNomeDoArquivo = uniqid();
$extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

if ($extensao != 'html' && $extensao != 'php') {
	// code...
	$path = $pasta . $novoNomeDoArquivo. "." . $extensao; 
	$deuCerto = move_uploaded_file($img["tmp_name"], $path);
	if($deuCerto){
	
		
      $conexao->query("INSERT INTO livro (titulo, autor, editora, data, volume, ficheiroPDF)
      VALUES('$titulo', '$autor', '$editora','$data1', '$volume', '$path')");
	  echo "Cadastrado com sucesso ";
	  header("location: listarLivro.php");
      }

    
}
else {
	echo "Tente novamente ";
	die(header("location: cadastroLivro.php"));
}


?>
<?php
include('conexao.php');
    
    $teste = $_GET['id'];
    $conexao->query("DELETE FROM livro WHERE id_livro = $teste");
	echo "Alterações efectuadas com sucesso ";
	header("location: listarLivro.php");
      




/*if(!empty($_GET['id']))
    {
        

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM livro WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM livro WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: editarLivro.php');
    */
   
?>

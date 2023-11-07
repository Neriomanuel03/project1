<?php 
 include('conexao.php');
    if(isset($_POST['email']) || isset($_POST['senha'])) {
        if(strlen($_POST['email']) == 0){
            echo "preencha o seu email";
        }else 
             if(strlen($_POST['senha']) == 0){
            echo "preencha o sua senha ";
        } else {
             $email = $conexao->real_escape_string($_POST['email']);
             $senha = $conexao->real_escape_string($_POST['senha']);

             $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
             $sql_query = $conexao->query($sql_code) or die("Falha na execução do codigo SQL: " .$mysqli->error);

             $quantidade = $sql_query->num_rows;

             if($quantidade == 1){
                  $usuarios = $sql_query->fetch_assoc();
                  $stat = $usuarios['status'];
                  
                  if(!isset($_SESSION)) {
                    session_start();
                  }
                  if($stat == "funcionario"){
                  $_SESSION['id_usuario'] = $usuarios['id_usuario'];
                  $_SESSION['nome'] = $usuarios['nome'];

                  header("Location: principal.php");
                  }else if($stat == "aluno"){
                        /*if($stat == ){
                  $_SESSION['id_usuario'] = $usuarios['id_usuario'];
                  $_SESSION['nome'] = $usuarios['nome'];

                  header("Location: bibliotecario.php");
                  }else{ */ 
                        $_SESSION['id_usuario'] = $usuarios['id_usuario'];
                        $_SESSION['nome'] = $usuarios['nome'];

                  header("Location: principala.php");

                  



             }
             } else{
                echo "Falha ao logar! E-mail ou senha incorreta";
             }

             


            }   
        }
        
?>
 


<!DOCTYPE html>
<html>
<head lang="PT-BR">
    <meta charset="UTF-8">
    <title>Tela de Login </title>

<style>

    body{
    margin:0;
    padding:0;
        color: #34495e;
    background-repeat: no-repeat;
    font-family: sans-serif;
}

.Login{
    width: 320px;
    height: 420px;
    background:rgba(0,0,0,0.5);
    color: #fff;
    left:50%;
    top:50%;
    position:absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 50px 30px ;
}

.imagem{
    width: 100px;
    height: 100px;
    border-radius: 100%;
    position: absolute;
    top:-64px;
    left: calc(50% - 50px);

}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.Login p{
    margin:0;
    padding: 0;
    font-weight: bold;
}
.Login input{
    width: 100%;
    margin-bottom: 20px;
}
.Login input[type="text"], input[type="Password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.Login button[type="submit"]{
    border: none;
    width: 50%;
    outline: none;
    background: linear-gradient(to right, #4472C4, #02d5ff );
    font-size: 22px;
    border-radius: 20px;
    color: #ffffff;
}
.Login button[type="submit"]:hover{
    cursor: pointer;
    color:#fff;
}
.Login a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.Login a:hover{
    color:#39dc79 ;
}
.bckimg{
    padding-top: 0px;

}
.txtslgn{
    font-family: 'txtslgn' !important;
    font-family: "Segoe UI"; 
    font-size: 3.6vw;
  letter-spacing: .0025em;
  line-height: normal;
  padding-top: 90px;
  padding-left: 100px;
  color: #34495e;
  box-sizing: border-box;
  font-weight: bold !important;

}
.footer{
    padding-top: 10px;
  padding-left: 600px;
}

</style>


</head>
<body>
<div class="txtslgn home-glass font-studeo bold">
<br>
Um      
<br>
único livro
<br>
traz milhares
<br>
 de experiências.
<br>

</div>

<div class="Login">
<img src="../assets/img/icon-login-4.png" class="imagem">

    
    <h1>Iniciar Sessão</h1>
    <h1>BIBLIOTECA VIRTUAL</h1>
    <?php
          if(isset($error)){
            foreach($error as $error){
              echo '<span class=msg_erro>'.$error.'</span>';
            };
          };
          ?>
    
    <form action="" method="post">
        
        <p>Email</p>
        <input type="text" name="email" placeholder="Endereço de email">
        <p>Palavra Passe</p>
        <input type="password" name="senha" placeholder="Palavra Passe">
        <button type="submit">Entrar</button>
        <a href=""><p> </p></a>

    </form>


</div><!-- Footer -->

<div class="bckimg">
    <img src="img/svg.png" alt="" height="600px" width="1570px">
<div class="footer">
 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; FROM Nério Manuel. 2023</span>
                    </div>
                </div>
            </footer>
 </div>
</div>
 

</body>
</html>
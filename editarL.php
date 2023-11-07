<?php
include("protecao.php");
include("conexao.php");

$teste = $_GET['id'];

if(isset($_POST['go'])){

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
	
		
      $conexao->query("UPDATE livro SET titulo = '$titulo', autor = '$autor', editora = '$editora', data = '$data1', volume = '$volume', ficheiroPDF = '$path' WHERE id_livro = $teste");
	  echo "Alterações efectuadas com sucesso ";
	  header("location: listarLivro.php");
      }

    
}
else {
	echo "Tente novamente ";
	die(header("location: editarL.php"));
}
}

if(!isset($teste)){
    header('location: listarLivro.php');

}

?>


    <!DOCTYPE html>
<html lang="PT-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastrar Livro</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            
        <a href="http://localhost/bibliotecaVirtual/assets/principal.php"> <img src="../assets/img/white.jpg" class="imagem"  width="230px" height="210px"align="Center"></a>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="principal.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

        

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Livro</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item" href="cadastroLivro.php">Cadastrar Livro</a>
                        <a class="collapse-item" href="listarLivro.php">Visualizar</a>
                    </div>
                </div>
            </li>
   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Utilizador</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="cadastroUtilizadore.php">Cadastrar utilizador</a>
                    
                        <a class="collapse-item" href="utilities-animation.html">Visualizar</a>
                        
                    </div>
                </div>
            </li>

            
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d">
                
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                         

                     
                            
                        <!-- Nav Item - Messages -->
                        
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                  
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>Olá <?php echo $_SESSION['nome']; ?></span></b> 
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="index1.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">BIBLIOTECA VIRTUAL</h1>
                        
                    </div>

                    



                                 <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <?php 
                         $most = mysqli_query($conexao, "SELECT * FROM `livro` WHERE id_livro = '$teste'") or die('Nao deu');
                         if(mysqli_num_rows($most) > 0){

                             while($mostrar = mysqli_fetch_assoc($most)){
                                ?>
                  <div class="card-body">
                    <h4 class="card-title">Actualizar Livro dados do livro: <strong> <?php echo $mostrar['titulo'] ?></h4><?php }} ?> </strong>
                    
                    <form class="forms-sample" method="post" enctype="multipart/form-data" action="">
                      <div class="form-group">
                        <label for="exampleInputName1">Titulo</label>
                        <input type="text" name= "titulo" class="form-control" id="exampleInputName1" data-titulo="<?php echo $titulo ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Autor</label>
                        <input type="text" name= "autor" class="form-control" id="exampleInputEmail3" data-autor="<?php echo $autor ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Editora</label>
                        <input type="text" name= "editora" class="form-control" id="exampleInputPassword4" data-Editora="<?php echo $Editora ?>" >
                      </div>

                       <div class="form-group">
                        <label for="exampleInputPassword4">Data de Cadastro</label>
                        <input type="date" name= "data1" class="form-control" id="exampleInputPassword4" data-data="<?php echo $data ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Volume</label>
                        <select class="form-control" name= "volume" id="exampleSelectGender" data-volume="<?php echo $volume ?>">
                          <option value="Unica">--</option>
                          <option value="I">Volume I</option>
                          <option value="II">Volume II</option>
                          <option value="III">Volume III</option>
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img" class="file-upload-default">
                        <div class="input-group col-xs-12">
                         
                          
                        </div>
                      </div>
                     
                      
                      <button type="submit" class="btn btn-primary" name="go">Atualizar</button>
                      <button class="btn btn-light">Cancelar</button>
                    </form>
                  </div>
                </div>
              </div>



                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Nério Manuel. 2023</span>
                    </div>
                </div>
            </footer>
            <!-- final do Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja terminar a sessão?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="index1.php">Sair</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/chart-area-demo.js"></script>
    <script src="../assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
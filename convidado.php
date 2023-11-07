<?php
include("conexao.php");
include("protecao.php");
$sql_code = "SELECT COUNT(*) AS total FROM usuario";
             $sql_query = $conexao->query($sql_code) or die("Falha na execução do codigo SQL: " .$mysqli->error);

?>

    <!DOCTYPE html>
<html lang="PT-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Convidado</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/calendar.css" rel="stylesheet">
    <script defer src="js/calendar.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a href="principal.php"> <img src="../assets/img/white.jpg" class="imagem"  width="230px" height="210px"align="Center"></a>
            

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

            <!-- Heading -->
            

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
                        <a class="collapse-item" href="editarLivro.php">Mais opções</a>
                    </div>
    </div>
</li>

            <!-- Divisor -->
            <hr class="sidebar-divider d-none d-md-block">


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Utilizador</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                    
                    <a class="collapse-item" href="listarAluno.php">Visualizar Aluno</a>
                    <a class="collapse-item" href="listarUZ.php">Visualizar funcionario</a>
                    
                        
                       
                    </div>
                </div>
            </li>
                  

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-">
                
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

                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Dropdown - Alerts -->
                                  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                              
                            
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - Informações do Usuario -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <b> Olá <?php echo $_SESSION['nome']; ?></span> </b> 
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - Informações do Usuario -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="../assets/index.php">
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
                        <h1 class="h3 mb-0 text-gray-800" text ="Center">BIBLIOTECA VIRTUAL</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">  <!--LIVROS -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <a href="listarLivro.php"><div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                           <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                LIVROS</div>

                                     <!--contagem de livros registrados-->    
                                            
                                 <?php
                                 $nerio = mysqli_query($conexao, "SELECT COUNT(*) AS livrinho from LIVRO") or die('erro');
                                     if(mysqli_num_rows($nerio) > 0){
                                        while($fff = mysqli_fetch_assoc($nerio)){

                                      ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $fff['livrinho']?></div>
                                        </div>
                                        <?php }} ?>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
       <!-- Eventos do Mês-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                            <a href="listarUZ.php">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                fUNCIONARIOS</div>
                                                <?php
                                 $nerio = mysqli_query($conexao, "SELECT COUNT(*) AS livrinho from USUARIO where status='funcionario'") or die('erro');
                                     if(mysqli_num_rows($nerio) > 0){
                                        while($fff = mysqli_fetch_assoc($nerio)){

                                      ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $fff['livrinho']?></div>
                                        </div>
                                        <?php }} ?>
                                                <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                        </a>
                            </div>
                        </div>
                         

                        <!-- USUARIO  -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <a class="collapse-item" href="listarAluno.php">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            ALUNOS </div>
                                                 <!--contagem de fUNCIONARIOS registrados--> 
                                                 <?php
                                 $nerio = mysqli_query($conexao, "SELECT COUNT(*) AS livrinho from USUARIO where status='aluno'") or die('erro');
                                     if(mysqli_num_rows($nerio) > 0){
                                        while($fff = mysqli_fetch_assoc($nerio)){

                                      ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $fff['livrinho']?></div>
                                        </div>
                                        <?php }} ?>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div> <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                               
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               TOTAL USUARIOS</div>
                                                <?php
                                 $nerio = mysqli_query($conexao, "SELECT COUNT(*) AS livrinho from USUARIO ") or die('erro');
                                     if(mysqli_num_rows($nerio) > 0){
                                        while($fff = mysqli_fetch_assoc($nerio)){

                                      ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $fff['livrinho']?></div>
                                        </div>
                                        <?php }} ?>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
   
                        
                      

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Eventos</h6>
                                    <div class="dropdown no-arrow">
                                      
                                        
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">30/09 até 04/10</h5>
        <p class="card-text">A Editora Acácias, em parceria com a Universidade Agostinho Neto, realiza mais uma Feira do Livro. Desta vez a iniciativa decorrerá no campus da universidade.</p>
        
      </div>
    </div>
  </div>

        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
            <br> <h5 class="card-title">23 de Abril</h5></b
            class="card-text">Dia Mundial do Livro e do Direito de Autor 2024.</p>
            
            </div>
            </div>
        </div>
        </div>
       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Calendario</h6>
                                    <div class="dropdown no-arrow">
                                  
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <div id="calPeriod">
                        <input id="calBack" type="button" value="&lt;">
                        <select id="calMonth"></select>
                        <input type="number" id="calYear">
                        <input id="calNext" type="button" value="&gt;">
                        </div>

                        <!-- (B) CALENDAR -->
                        <div id="calWrap"></div>

                        <!-- (C) EVENT FORM -->
                        <dialog id="calForm"><form method="dialog">
                        <div id="evtClose">X</div>
                        <h2>CALENDAR EVENT</h2>
                        <label>Date</label>
                        <input type="text" id="evtDate" readonly>
                        <label>Details</label>
                        <textarea id="evtTxt" required></textarea>

                        <input id="evtDel" type="button" value="Delete">
                        <input id="evtSave" type="submit" value="Save">
                        </form></dialog>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Color System -->
                            <div class="row">
                                
                            </div>

                            </div> 
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
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout -->
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
                <div class="modal-body">Selecione "Sair" para terminar a sessão.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="index.php">Sair</a>
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
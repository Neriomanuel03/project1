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

    <title>Principal</title>

    <!-- link da fontawasome-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

  
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
     #card-header{
        width: 10%;
        height: 20px;
       } 
        .box-search{
            display: flex;
            justify-content:center;
            gap:.1%;
         
     }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- barra lateral -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- barra lateral-->
            <a href="principala.php"> <img src="../assets/img/white.jpg" class="imagem"  width="230px" height="210px"align="Center"></a>
            

            <!-- Divisor -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
            <a class="nav-link" href="principala.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

          <!-- Divisor -->
          <hr class="sidebar-divider">

            <!-- cabeçalho -->
            <div class="sidebar-heading">
                
            </div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-book"></i>
        <span>Livro</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                   <div class="bg-white py-2 collapse-inner rounded"> 
                        
                        <a class="collapse-item" href="listarLivroa.php">Visualizar</a>
                        
                    </div>
    </div>
</li>

              <!-- Cabeçalho -->

            <hr class="sidebar-divider">
           

            <!-- Menu lateral  -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none ">
                
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

                   
<div class="box-search">
<input type="search" class="form-control w-30" placeholder="Pesquisar" id="pesquisar">
<button onclick="searchData()" class="btn btn-primary">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
</div>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            
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
                               
                            </div>
                        </li>

                        

                        <div class="topbar-divider d-none d-sm-block"></div>
                    
                         <!-- Informacoes do Usuario -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <b> Olá <?php echo $_SESSION['nome']; ?></span></b>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Informacoes do Usuario -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
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
                       <b> <h1 class="h3 mb-0 text-primary text-center" >BIBLIOTECA VIRTUAL DO CESCA </h1></b>
                        
                                
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    
                        <!--CONTEUDO DO SLIDER -->
                        
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" >
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height:20rem">
            <div class="carousel-item active ">
            <img class="d-block w-100" src="img/Untitled-1.png" alt="First slide" >
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/LLL.png" alt="First slide" height="380rem">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/Untitled-1.png" alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="row no-gutters align-items-center">
                                        <div class="col mr-1"> 
                                </div>
                            </div>
                        </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="">
                                    <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Sugestões de leitura</h6>
                                    <div class="dropdown no-arrow">
                                    </div>
                                </div>
                                    <div class="dropdown no-arrow"> <div>


                                            <div class="dropdown-header text-center text-info "> </div>
                                            
                                            <div class="card-group">
  <div class="card">
  <a href="upload/64335c48b6f38.pdf"><img src="IMG/capa-logica-com-java-3D-300x501 (2).png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                <h5 class="card-title"> Programação para Iniciantes</h5>
                <p class="card-text">Aprenda lógica de programação com a linguagem Java.</p>
                </div>
                <div class="card-footer">
                <a href="upload/64335c48b6f38.pdf" class="btn btn-primary">Ler livro</a>
                </div>
  </div>
  <div class="card">
  <a href="upload/643359dc81168.pdf"><img src="IMG/Untitled-2.png" class="card-img-top" alt="...""></a>
                <div class="card-body">
                <h5 class="card-title"> Desenho Artístico</h5>
                <p class="card-text">O objetivo deste ebook é apresentar a arte do desenho artístico, mostrando os princípios básicos do desenho.</p>
                </div>
                <div class="card-footer">
                <a href="upload/643359dc81168.pdf" class="btn btn-primary">Ler livro</a>
                </div>
  </div>
  <div class="card">
  <a href="upload/6431c5a36031f.pdf"><img src="IMG/horas-de-terror.jpg" class="card-img-top" alt="...""></a>
                <div class="card-body">
                <h5 class="card-title"> Horas de Terror</h5>
                <p class="card-text"> Raymond Duc, agente do Deuxíème Bureau, acabou dedar o laço em sua gravata
                                        borboleta, na frente do
                                    espelho.</p>
                </div>
                <div class="card-footer">
                <a href="upload/6431c5a36031f.pdf" class="btn btn-primary">Ler livro</a>
                </div>
  </div>
</div>
                                            
                                            <div class="">
                                                
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="">
                                    <div class="">
                                        <canvas id=""></canvas>
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
                                    <h6 class="m-0 font-weight-bold text-primary">Sobre</h6>
                                    <div class="dropdown no-arrow">
                                    
                                        
                                    </div>
                                </div>


                                
                                <!-- Card Body -->
                                <div class="card-body">
 

                                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Cabeçalho</div>
  <div class="card-body">
    <h5 class="card-title">BIBLIOTECA VIRTUAL</h5>
    <p class="card-text">Este site, além de ser uma biblioteca virtual que busca oferecer um maior relacionamento entre o aluno e os livros, é também uma rede social acadêmica, que pretende aproximar o aluno do professor, no ambiente online. Com o objetivo de fomentar a leitura das obras clássicas, promovendo o  compartilhamento de ideias, construindo uma ponte que liga o presente com o passado. Para assim, aperfeiçoar a moral e a cultura do país.</p>
  </div>
</div>


                                    <div class="chart-pie pt-4 pb-2">
                                       
                                    </div>
                                    <div class="mt-4 text-center small">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                           

                            <!-- Color System -->
                            <div class="row">
                                
                               
                                
                               
                                
                               
                                
                               
                               
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                
                               
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
                        <span>Copyright &copy; FROM Nério Manuel. 2023</span>
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
<script>
var search = document.getElementById('pesquisar');

search.addEventListener("keydown", function(event) {

    if (event.key === "Enter") 
    {
        searchData();
    }
});

function searchData()
{
    window.location = 'listarLivroa.php?search=' +search.value;
}


</script>
</html>
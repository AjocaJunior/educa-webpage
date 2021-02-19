<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seja Bem-Vinda ao educa - Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/educa/logo.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <?php



include_once('../includes/dbconfig.php');
$ref = 'testevoc/';
$fetchdata = $database->getReference($ref)->getValue();

$name           = "";
$apelido   = "";
$contact = "";
$email                   = "";
$genero                  = "";
$resultado              = "";
$countResultado = "0";

foreach($fetchdata as $key => $row){
    
      $name                  = $row['name'];
      $apelido          = $row['apelido'];
      $contact = $row['contact'];
      $email                    = $row['email'];
      $genero                = $row['genero'];
    
      break;
    }

?>

<?php

include_once('../includes/dbconfig.php');
$reff = 'testevoc/1c87c218-f3cb-4082-984b-237651af0cc5/Resultado';
$fetchdataa = $database->getReference($reff)->getValue();



foreach($fetchdataa as $key => $roww){
    
      ?>
      <p><?php echo $roww['uid'] ?></p>
  <?php  } ?>



    <?php
  $ref = 'testevoc/';
  $fetchdata = $database->getReference($ref)->getValue();
  $countResultado = 0;

  if($fetchdata != null){
    foreach($fetchdata as $key => $row){
      $countResultado++;
  }
  }
 
?>



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #414c52">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="img/logo.png" alt="" width="30" height="30">
                </div>
                <div class="sidebar-brand-text mx-3">Educa Admin <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Educa Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-university"></i>
                    <span>Resultados</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Resultados:</h6>

                        <a class="collapse-item" href="#">Todos os Resultados</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mb-4">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between  mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                        <!--        -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Resultados</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $countResultado; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book-open fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-8">
                            <div class="card">

                                <!-- Card Body -->
                                <!-- Project Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Contactos</h6>
                                    </div>
                                    <div class="card-body">
                                        <table id="productSizes" class="table">
                                            <thead>
                                                <tr class="d-flex">
                                                    <th class="col-1">Ordem</th>
                                                    <th class="col-3">Nome</th>
                                                    <th class="col-3">Apelido</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                                <?php

     
 
 
        
        $count = 0;
            if($fetchdata != null):?>
                        <?php foreach( $fetchdata as $key => $row):
          
                          $count++;                       
                           
                          ?>
                                                <tr class="d-flex">
                                                    <td class="col-1"><?php echo  $count; ?></td>
                                                    <td class="col-3"><?php echo $row["name"]; ?></td>
                                                    <td class="col-3"><?php echo $row["apelido"]?> </td>
                                                    <td class="col-5"><a href="testevocresult.php?id=<?php echo $row['uid']?>" class="btn btn-primary"> Resultado </a></td>
                                                    <?php endforeach ?>  
                                                       <?php endif?>    

  


                                                       
                                                                                                                                                     
                                                </tr>
                                                
                                               

                                            </tbody>

                                        </table>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">



                            <!-- Color System -->


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
                        <span>Copyright &copy; Educa Dashboard 2021</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.html">Sair</a>
                </div>
            </div>
        </div>
    </div>


    <!-- firebase -->
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="../js/db/app.js"></script>
    <script src="../js/db/real-time-database.js"></script>

    <!-- my script -->



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

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

$uid  = $_GET['id'];

if($uid == null){
  if(isset($_SESSION['uidEvento'])){
    $uid = $_SESSION['uidEvento'];
  }else{
    header("Location: evento_login.php");
  }
  
}

include_once('../includes/dbconfig.php');
$ref = 'evento/';
$fetchdata = $database->getReference($ref)->getValue();

$title           = "";
$event_description = "";
$video_link              = "";
$img_moderador = "";
$nome_moderador = "";
$profissao = "";
$horainicio = "0";
$horafim = "0";
$countOrador = "0";

foreach($fetchdata as $key => $row){
    if($row['uid'] == $uid ){
      $title                   = $row['evento_titulo'];
      $event_description = $row['evento_descricao'];
      $img_moderador           = $row['img_moderador'];
      $nome_moderador = $row['moderador_nome'];
      $video_link              = $row['video_link'];
      $profissao = $row['profissao'];
      $horainicio = $row['start_time'];
      $horafim = $row['end_time'];
      break;
    }
}

?>



    <?php
  $ref = 'evento/'.$uid.'orador';
  $fetchdata = $database->getReference($ref)->getValue();
  $countOrador = 0;

  if($fetchdata != null){
    foreach($fetchdata as $key => $row){
      $countOrador++;
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
                    <i class="fas fa-fw fa-user"></i>
                    <span>Oradores</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Oradores:</h6>
                        <a class="collapse-item" href="add_oradores.php?id=<?php echo $uid; ?>">Adicionar Orador</a>
                        <a class="collapse-item" href="add_oradores.php?id=<?php echo $uid; ?>">Todos Oradores</a>
                    </div>
                </div>
            </li>

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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo substr($title , 0 , 15).".."; ?> </span>
                                <img class="img-profile rounded-circle" src="<?php echo $img1; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                        <!--        -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Oradores</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $countOrador; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
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
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Sobre o evento </h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Menu:</div>
                                            <a class="dropdown-item" href="#">Actualizar</a>
                                            <!--                      <a class="dropdown-item" href="#">Another action</a>-->
                                            <!--                      <div class="dropdown-divider"></div>-->
                                            <!--                      <a class="dropdown-item" href="#">Something else here</a>-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div>
                                        <h3> <?php echo $title ?></h3>
                                        <p style="white-space: pre-line" contentEditable="true" id="about">
                                            <?php echo $event_description ?>
                                        </p>
                                        <button type="button" onClick="updateDescription()"
                                            class="btn btn-primary">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
 <!-- Content Row -->
 

<!-- Content Column -->
<div class="col-lg-8 mb-4">

    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detalhes</h6>
        </div>
        <div class="card-body">

            <form>

            <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputModeradorNome"
                            value="<?php echo $nome_moderador; ?>" placeholder="Nome do Moderador">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputProfissao"
                            value="<?php echo $profissao; ?>" placeholder="Profissao do Moderador">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputHoraInicio"
                            value="<?php echo $horainicio; ?>" placeholder="Hora de Inicio">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputHoraFim"
                            value="<?php echo $horafim; ?>" placeholder="Hora de Fim">
                    </div>
                </div>

               


                <button type="button" onClick="updateDetalhes()"
                    class="btn btn-secondary btn-lg btn-block">Actualizar</button>

            </form>

        </div>
    </div>

    <!-- Color System -->


</div>



                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Video do evento</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Atualizar video</div>

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="link" placeholder="Link"
                                                    value="<?php echo $video_link; ?>" aria-label="Link"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" onClick="updateLink()"
                                                        type="button"><i
                                                            class="fas fa-check fa-sm fa-fw text-gray-400"></i></button>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">

                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src=" <?php echo $video_link?>"
                                                allowfullscreen></iframe>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!--- CONTACTOS -->
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
                        <span>Copyright &copy; Educa 2020</span>
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
                <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão actual.
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

    <script>
    function updateLink() {
        var linkUrl = document.getElementById('link').value;
        if (linkUrl != null) {
            firebase.database().ref().child('evento').child(id).child('video_link').set(linkUrl, function(error) {
                window.location.reload(true);
            });
        }

    }


    function updateDetalhes() {
        var nome_moderador = document.getElementById('inputModeradorNome').value;
        var profissao = document.getElementById("inputProfissao").value;
        var horainicio = document.getElementById("inputHoraInicio").value;
        var horafim = document.getElementById("inputHoraFim").value;
        var id = "<?php echo $uid ?>";

        firebase.database().ref().child('evento').child(id).child('moderador_nome').set(nome_moderador, function(error) {});

        firebase.database().ref().child('evento').child(id).child('profissao').set(profissao, function(error) {});

        firebase.database().ref().child('evento').child(id).child('start_time').set(horainicio, function(error) {
            window.location.reload(true);
        });
        
        firebase.database().ref().child('evento').child(id).child('end_time').set(horafim, function(error) {});

    }

    function updateDescription() {
        var description = document.getElementById("about").textContent;
        var id = "<?php echo $uid ?>";

        firebase.database().ref().child('evento').child(id).child("evento_descricao").set(description,
            function(error) {
                if (error) {
                    alert("Data could not be saved." + error);
                    window.location.reload(true);
                } else {
                    window.location.reload(true);
                    // location.href="index.php";
                }
            });

    }
    </script>


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

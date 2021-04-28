<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Galeria de Expositor</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="icon" href="../img/educa/logo.png">
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
<?php $uid  = $_GET['id']; ?>
<?php 
        include_once('../includes/dbconfig.php');
        $ref = 'institution/';
        $fetchdata = $database->getReference($ref)->getValue();
        $uid  = $_GET['id'];

        if($uid == null || $uid == "") {
            header('Location: index.php');
        }
    ?>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #414c52">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Educa</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="expositor_admin.php?id=<?php echo $uid; ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="add_gallery.php?id=<?php echo $uid; ?>">   <i class="fas fa-fw fa-camera"></i>
                    <span>Adicionar Fotos</span>
                   
                    </a>
                    
        <a class="nav-link" href="college.php?id=<?php echo $uid; ?>" >
          <i class="fas fa-fw fa-university"></i>
          <span>Faculdades</span>
        </a>
        <a class="nav-link" href="courses.php?id=<?php echo $uid; ?>" >
          <i class="fas fa-fw fa-book-open"></i>
          <span>Cursos</span>
        </a>
       
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="expositor_admin.php?id=<?php echo $uid; ?>" >
          <i class="fas fa-fw fa-wrench"></i>
          <span>Home</span>
        </a>
      
      </li>

     

      <!-- Heading -->
      <div class="sidebar-heading">
      
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
  


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
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>

       

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              
                <img class="img-profile rounded-circle" src="../img/educa/logo.png">
              </a>
            
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        



      
        <section class="our-speaker-area section-padding-100 ">
        <div class="container ">
            <div class="row ">


                <?php
                $ref = 'institution/'.$uid.'/gallery';
                $fetchdata = $database->getReference($ref)->getValue();
           ?>
                <?php if($fetchdata != null):?>
                <?php
            foreach( $fetchdata as $key => $row): ?>


                <!-- Single Speaker Area -->
                <div class="col-12 col-sm-6 col-lg-4 ">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp " data-wow-delay="300ms ">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb ">
                            <img src="<?php echo $row['url']; ?>" alt="" style="min-height: 300px; max-height: 350px;">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info ">
                            <a href="" type="button" onclick="deleteImg('<?php echo $row['uid']; ?>')"><i
                                    class="fa fa-trash"></i></a>
                        </div>
                        <!-- Info -->
                        <!-- <div class="speaker-info ">
                            <h5>Albert Barnes</h5>
                            <p>Founder</p>
                        </div> -->
                    </div>
                </div>

                <?php endforeach ?>
                <?php endif?>

            </div>
        </div>
    </section>

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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
  <script src="../js/db/app.js"></script>
    <script src="../js/db/real-time-database.js"></script>

  <script>
     function deleteImg(uidImg) {

firebase.database().ref().child('institution').child('<?php echo $uid; ?>').child("gallery").child(uidImg)
    .remove()
    .then(function() {
        window.location.reload();
    })
    .catch(function(error) {
        alert("Opsss ocoreu uma falha");
    });
}
    </script>

<style>
.single-speaker-area {
  position: relative;
  z-index: 1;
  overflow: hidden;
 margin-top: 10px;
  margin-bottom: 15px;
  border-radius: 5px 5px 5px 5px; 

  
}
  .single-speaker-area .speaker-single-thumb {
    position: relative;
    z-index: 1;
    border-radius: 0 0 5px 5px;
  
  }
    .single-speaker-area .speaker-single-thumb img {
      -webkit-transition-duration: 1500ms;
      -o-transition-duration: 1500ms;
      transition-duration: 1500ms;
      border-radius: 0 0 5px 5px ;
      width: 100%; }
  .single-speaker-area .social-info {
    position: absolute;
    top: -180px;
    right: 0;
    z-index: 22;
    background-color: #f2871c;
    padding: 15px;
    border-radius: 0 5px 0 5px;
    text-align: center;
    -webkit-transition-duration: 800ms;
    -o-transition-duration: 800ms;
    transition-duration: 800ms; }
    .single-speaker-area .social-info a {
      display: block;
      font-size: 18px;
      color: #ffffff;
      margin-bottom: 5px; }
      .single-speaker-area .social-info a:last-child {
        margin-bottom: 0; }
  .single-speaker-area .speaker-info {
    position: absolute;
   
    z-index: 22;
    /* background-color: black; */
    top:88%;
    
    width: 100%;
    height: 100%;
    background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(39, 26, 26,0.3));
   text-align: center;
   text-transform: uppercase;
   border-radius: 0 0 5px 5px;
   
  }
  .single-speaker-area .speaker-info-orador {
    position: absolute;
   
    z-index: 22;
    /* background-color: black; */
    top:73%;
    
    width: 100%;
    height: 100%;
    background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(39, 26, 26,0.3));
   text-align: center;
   text-transform: uppercase;
   border-radius: 0 0 5px 5px;
   
  }
  .single-speaker-area .speaker-info-orador h5 {
    font-size: 14px;
    font-weight: 500;
    color: #ffffff;
    letter-spacing: 1px;
    margin-bottom: 8px; 
  text-align: center;
 
  
  
  }
  .single-speaker-area .speaker-info-orador p {
    color: #f2871c;
    margin-bottom: 0;
    font-size: 11px;
    letter-spacing: 1px;
    line-height: 1; }
  /* .single-speaker-area .speaker-info-2{
    border-bottom: black groove 5px;
  } */

    .single-speaker-area .speaker-info h5 {
      font-size: 16px;
      font-weight: 500;
      color: #ffffff;
      letter-spacing: 1px;
      margin-bottom: 10px; 
    text-align: center;
   
    
    
    }
    .single-speaker-area .speaker-info p {
      color: #f2871c;
      margin-bottom: 0;
      letter-spacing: 1px;
      line-height: 1; }
  .single-speaker-area:hover .social-info, .single-speaker-area:focus .social-info {
    top: 0; }



</style>
</body>

</html>

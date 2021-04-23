<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cursos</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="icon" href="../img/educa/logo.png">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php $uid  = $_GET['id']; ?>
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
                <a class="nav-link" href="courses.php?id=<?php echo $uid; ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Cursos</span>
                </a>

            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="expositor_admin.php?id=<?php echo $uid; ?>">
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <img class="img-profile rounded-circle" src="../img/educa/logo.png">
                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <table id="productSizes" class="table">
                        <thead>
                            <tr class="d-flex">

                                <th class="col-4">Curso</th>
                                <th class="col-7">Descrição</th>
                                <th class="col-1">Salvar</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr class="d-flex">
                                <td class="col-4"><input type="text" id="course" class="form-control"></td>
                                <td class="col-7">
                                    <textarea class="form-control" id="description" rows="1"></textarea>
                                </td>

                                <td class="col-1"><a href="" type="button" onclick="addCourse()"><i
                                            class="fa fa-save fa-2x"></i></a></td>
                            </tr>
                        </tbody> -->
                    </table>



                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Lista de cursos</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <div class="container-fluid">
                                <table id="productSizes" class="table">
                                    <thead>
                                        <tr class="d-flex">
                                            <th class="col-1">Posição</th>
                                            <th class="col-3">Cursos</th>
                                            <th class="col-6">Detalhes</th>
                                            <th class="col-2">Delete | Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        <?php


                                                  if($uid == null){
                                                    if(isset($_SESSION['uidInstitute'])){
                                                      $uid = $_SESSION['uidInstitute'];
                                                    }else{
                                                      header("Location: login.html");
                                                    }
                                                    
                                                  }
                                                    
                                              include_once('../includes/dbconfig.php');         
                                              $ref = 'institution/'.$uid.'/course';
                                              $fetchdata = $database->getReference($ref)->getValue();
                                              
                                                              $count = 0;
                                                              if($fetchdata != null):?>
                                        <?php foreach( $fetchdata as $key => $row):
                                                                      $count++;
                                                                    
                                                                      ?>

                                        <tr class="d-flex">
                                            <td class="col-1"><?php echo $count; ?></td>
                                            <td class="col-3"> <input href="#" type="text" class="form-control"
                                                    id="inputCourse" value="<?php echo $row['course']; ?>"></td>
                                            <td class="col-6"> <input href="#" type="text" class="form-control"
                                                    id="inputDescription" value="<?php echo $row['description']; ?>">
                                            </td>
                                            <td class="col-1"> <a href="" type="button"
                                                    onclick="deleteCourse('<?php echo $row['uid']; ?>')"><i
                                                        class="fa fa-trash"></i></a></td>
                                            <td class="col-1"> <a href="" type="button"
                                                    onclick="editCourse('<?php echo $row['uid']; ?>')"><i
                                                        class="fa fa-edit"></i></a></td>
                                        </tr>

                                        <?php endforeach ?>
                                        <?php endif?>




                                    </tbody>
                                </table>
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
    // function addCourse() {
    //     var course = document.getElementById("course").value;
    //     var description = document.getElementById("description").value;
    //     var uid = "<?php echo $_GET['id']; ?>"
    //     var uidCourse = uuidv4();

    //     var data = {
    //         course: course,
    //         description: description,
    //         uid: uidCourse
    //     }

    //     firebase.database().ref().child('institution').child(uid).child("course").child(uidCourse).set(data,
    //         function(error) {
    //             if (error) {
    //                 alert("Data could not be saved." + error);
    //             } else {
    //               alert("Saved")
    //                 window.location.reload();
    //             }
    //         });
    // }

    function deleteCourse(uidImg) {

        firebase.database().ref().child('institution').child('<?php echo $uid; ?>').child("course").child(uidImg)
            .remove()
            .then(function() {
                window.location.reload();
            })
            .catch(function(error) {
                alert("Opsss ocoreu uma falha");
            });
    }

    function editCourse(uidImg) {
        var course = document.getElementById('inputCourse').value;
        var uid = "<?php echo $uid ?>";
        var description = document.getElementById('inputDescription').value;

        var data = {
            course: course,
            description: description,
            uid: uidImg
        }

        if (course != null) {
            firebase.database().ref().child('institution').child(uid).child('course').child(uidImg).set(data,
                function(error) {
                    window.location.reload(true);
                });
        }

    }


    function uuidv4() { // Public Domain/MIT
        var d = new Date().getTime(); //Timestamp
        var d2 = (performance && performance.now && (performance.now() * 1000)) ||
        0; //Time in microseconds since page-load or 0 if unsupported
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random() * 16; //random number between 0 and 16
            if (d > 0) { //Use timestamp until depleted
                r = (d + r) % 16 | 0;
                d = Math.floor(d / 16);
            } else { //Use microseconds since page-load if supported
                r = (d2 + r) % 16 | 0;
                d2 = Math.floor(d2 / 16);
            }
            return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
        });
    }
    </script>


</body>

</html>

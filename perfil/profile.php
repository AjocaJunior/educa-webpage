<!--
=========================================================
* Argon Design System - v1.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../img/educa/logo.png">
    <title>
        Educa - Meu Perfil
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
    <link href="../style.css" rel="stylesheet" />
</head>

<body class="profile-page">

    <input type="hidden" name="uid" id="uid">

    <script>
    var uiduserjs = sessionStorage.getItem('usuarioId');
    </script>
    <?php 

if(isset($_GET["uid"])){
    $uiduser =  $_GET["uid"];
} else {
    echo "<script> window.location.href='profile.php?uid='+uiduserjs</script>";
}

 include_once('../includes/dbconfig.php');  



?>
    <div class="wrapper">
        <section class="section-profile-cover section-shaped my-0">
            <!-- Circles background -->
            <img class="bg-image" src="../img/bg-img/backgroundeducaonline1.jpg" style="width: 100%;">
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <!-- <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon> -->
                </svg>
            </div>
        </section>
        <section class="section bg-secondary">
            <div class="container">
                <div class="card card-profile shadow">
                    <div class="px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image mb-md">

                                    <label for="photo">
                                        <img src="" id="imageUrl" class="rounded-circle"
                                            style="width: 140px; height: 140px;" />
                                                        <input id="photo" name="photo" type="file" style="display: none;" />
                                    </label>
                                 
                        
                                    <a type="button" onClick="uploadImage()"
                                            class="btn btn-primary text-center"> <i class="fas fa-fw fa-upload"></i></a>
                                    <!-- <img id="fotoperfil" src="assets/img/noperfil.jpg"  class="rounded-circle" style="width: 140px; height: 140px;"> </img>
                     -->

                                </div>



                            </div>
                            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">


                                <div class="card-profile-actions py-4 mt-lg-0">

                                    <!-- <input type="file" id="photo"  class="btn btn-sm btn-info mr-4"/>
                  <button onclick="" class="btn btn-sm btn-default float-right">Mudar perfil</button>
                   -->
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-1">
                                <!-- <div class="card-profile-stats d-flex justify-content-center">
                  <div>
                    <span class="heading">22</span>
                    <span class="description">Friends</span>
                  </div>
                  <div>
                    <span class="heading">10</span>
                    <span class="description">Photos</span>
                  </div>
                  <div>
                    <span class="heading">89</span>
                    <span class="description">Comments</span>
                  </div>
                </div> -->
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <!-- <form action="uploadimg.php" method="post" enctype="multipart/form-data" style="position: -ms-page;" class="text-center;" ;>  
                <input  type="file" name="adicionarFoto" id="fileUpload" />
                <input type="submit" value="Salvar" name="Submit"/>
              </form> -->
                            <h3 id="user-name">Carregando...<span class="font-weight-light"></span></h3>
                            <div id="email" class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                            <div id="category" class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i></div>
                            <div id="contact" class="h6 font-weight-300"><i class="ni business_briefcase-24 mr-2"></i>
                            </div>
                            <div id="date_of_birth" class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>
                            </div>
                            <div id="residence" class="h6 mb-4"><i class="ni business_briefcase-24 mr-2"></i></div>


                        </div>
                        <div class="col-xl-12 col-lg-12">

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Agenda de chat</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>

                                                    <th>Instituição</th>
                                                    <th>Data</th>
                                                    <th>Hora</th>
                                                    <th>Chat</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php
                                            
                                                $ref = 'users/'.$uiduser.'/agendachat';

                                               
                                                $fetchdata = $database->getReference($ref)->getValue();
                                                $countAgenda= 0;

                                                if($fetchdata != null){
                                                    foreach($fetchdata as $key => $row){
                                                    $countAgenda++;
                                                    
                                                ?>
                                                <tr>

                                                    <td><?php echo $row['title'] ?></td>
                                                    <td><?php echo $row['data'] ?> </td>
                                                    <td><?php echo $row['time'] ?></td>
                                                    <td>
                                                        <form method="POST" id="openChatForm" action="/openVideoChat">
                                                            <input type="hidden" name="uidSchedule"
                                                                value="<%= schedule.uid %>" />
                                                            <input type="hidden" name="uidExhibitor"
                                                                value="<%= data.uid %>" />
                                                            <input type="hidden" name="link"
                                                                value="<%= schedule.linkChat %>" />

                                                            <a type="submit" href="<?php echo $row['chat'] ?>"
                                                                class="btn btn-outline-primary waves-effect col-12"> <i
                                                                    class="fas  fa-video pr-2"
                                                                    aria-hidden="true"></i>Iniciar </a>
                                                        </form>
                                                    </td>
                                                </tr>


                                                <?php 
                                                  }
                                                }?>




                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 py-5 border-top text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <a href="../index.php" class="btn confer-btn-white outline"><i
                                            class="zmdi zmdi-home"></i> Início</a>
                                    <!--  <p>An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p> -->
                                    <button onclick="signOut()" class="btn confer-btn-white outline"><i
                                            class="zmdi zmdi-arrow-back"></i>
                                        Sair</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row row-grid align-items-center">


                </div>
                <hr>
                <div class="row align-items-center justify-content-md-between">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p> Copyright &copy;
                                <script>
                                document.write(new Date().getFullYear());
                                </script> Todos os direitos reservados <i class="fa fa-heart-o" aria-hidden="true"></i>
                                por <a href="https://www.educa.co.mz" target="_blank">Educa</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav nav-footer justify-content-end">
                            <li class="nav-item">
                                <p> <a href="https://www.educa.co.mz" target="_blank">Início</a></p>
                            </li>



                            <!-- <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">License</a>
              </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/moment.min.js"></script>
    <script src="assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
    <script src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
    <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="assets/js/argon-design-system.min.js?v=1.2.0" type="text/javascript"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-design-system-pro"
        });
    </script>


    <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="../js/db/app.js"></script>
    <script src="../js/db/real-time-database.js"></script>
    <script>
    function hideButton() {
        var btn = document.getElementById("btnUpdate");
        btn.style.visibility = "hidden";
        updatePerfil();
    }

    function showButton() {
        var btn = document.getElementById("btnUpdate");
        btn.style.visibility = "visible";
    }


    function updatePerfil() {
        firebase.auth().onAuthStateChanged(function(user) {
            var user_name = document.getElementById("user-name").textContent;
            firebase.database().ref().child('users').child(user.uid).child('name').set(user_name, function(
                error) {});
        });
    }


    // function uploaage() {
    //     const ref = firebase.storage().ref().child("profileImg");
    //     const file = document.querySelector("#photo").files[0];
    //     const name = +new Date() + "-" + file.name;
    //     const metadata = {
    //         contentType: file.type
    //     };
    //     const task = ref.child(name).put(file, metadata);
    //     task
    //         .then(snapshot => snapshot.ref.getDownloadURL())
    //         .then(url => {
    //             firebase.auth().onAuthStateChanged(function(user) {
    //                 var db = firebase.database();
    //                 db.ref("users/" + user.uid + "/imageUrl").set(url);
    //                 location.href = 'profile.php';
    //                 console.log(user.uid);
    //             });
    //             //document.querySelector("#image").src = url;
    //         })
    //         .catch(console.error);
    // }
    function uploadImage() {
        const ref = firebase.storage().ref();
        const file = document.querySelector("#photo").files[0];
        const name = +new Date() + "-" + file.name;
        const metadata = {
            contentType: file.type
        };
        const task = ref.child(name).put(file, metadata);
        task
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then(url => {
                firebase.auth().onAuthStateChanged(function(user) {
                    var db = firebase.database();
                    db.ref("users/" + user.uid + "/imageUrl").set(url);
                    location.href = 'profile.php';
                    console.log(user.uid);
                });
                updateImage(url);
                //document.querySelector("#image").src = url;
            })
            .catch(console.error);
    }
    function updateImage(url) {


var img1 = url;

var id = "<?php echo $uiduser ?>";

if (img1 != null) {
firebase.database().ref().child('users').child(id).child('imageUrl').set(imageUrl, function(error) {
    window.location.reload(true);
});
}

}

    function signOut() {
        firebase.auth().signOut().then(function() {
            location.href = '../login.html';
        }).catch(function(error) {
            // An error happened.
        });
    }

    firebase.auth().onAuthStateChanged(function(user) {
        var useruid = "";
        var uid = document.getElementById("uid");

        if (user) {
            firebase.database().ref('users').on('value', function(snapshot) {
                snapshot.forEach(function(item) {

                    if (item.val().userId !== null && item.val().userId !== undefined) {
                        var db_uid = item.val().userId.toString().trim();
                        var user_uid = user.uid.toString().trim();


                        if (db_uid == user_uid) {
                            var imageUrl = document.getElementById("imageUrl");
                            var user_name = document.getElementById("user-name");
                            var email = document.getElementById("email");
                            var category = document.getElementById('category');
                            var contact = document.getElementById("contact");
                            var residence = document.getElementById("residence");
                            var data_de_nascimento = document.getElementById("date_of_birth");
                            useruid = document.getElementById("uid-user");
                            email.innerHTML = item.val().email;
                            user_name.innerHTML = item.val().name;
                            category.innerHTML = item.val().category;
                            contact.innerHTML = item.val().contact;
                            residence.innerHTML = item.val().residence;
                            data_de_nascimento.innerHTML = item.val().date_of_birth;
                            useruid.innerHTML = item.val().userId;
                            sessionStorage.setItem('usuarioId', item.val().userId);



                            if (item.val().imageUrl != null && item.val().imageUrl != "ddd") {
                                imageUrl.src = item.val().imageUrl;
                            }
                            return;
                        }

                    }

                });
            });

        } else {
            location.href = '../login.html';
        }



    });
    </script>



</body>

</html>

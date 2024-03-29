<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title id="title">Educa - Ponto Turístico</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/educa/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- /Preloader -->


    <?php

      include_once('includes/dbconfig.php');
      $ref = 'pontoturistico/';
      $fetchdata = $database->getReference($ref)->getValue();
      $uid  = $_GET['id'];
      $chat = "";
      $pontoturistico           = "";
      $localization    = "";
      $ponto_description = "";
      $phone                   = "";
      $email                   = "";
      $website                 = "";
      $video_link              = "";
      $p1 = "";
      $p2 = "";
      $img1 = "";
      $img2 = "";

      foreach($fetchdata as $key => $row){
          if($row['uid'] == $uid ){
            $chat = $row['chat'];
            $pontoturistico           = $row['ponto_name'];
            $localization    = $row['location'];
            $ponto_description = $row['ponto_description'];
            $img1                    = $row['img1'];
            $img2                    = $row['img2'];
            $phone                   = $row['phone'];
            $email                   = $row['email'];
            $website                 = $row['website'];
            $video_link              = $row['video_link'];
            $visits                  = $row['visits'];
            $contact                 = $row['contact'];

            $visits = $visits + 1;

            $index = -1;
            if($video_link == null || $video_link == ""){
                $video_link = "https://www.youtube.com/embed/eNUIvSlEk7E";
            }
            $str =  $ponto_description;
                  if(preg_match("#Visão#", $str, $matches, PREG_OFFSET_CAPTURE)) {
                     $index = $matches[0][1];
                     $p1 = substr($str,0,$index);
                     $p2 = substr($str , $index , strlen($str));

                  }else{
                       $p1 = $str;
                  }
            setDescription($ponto_description);
            break;
          }
      }

      function setDescription($str){

      }

    ?>

    <!-- Header Area Start -->
    <header class="header-area" style="background-color: #414c52;">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.php"><img src="./img/educa/Simboloeduca-01.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="index.php">Inicio</a></li>
                                <li><a href="#about">Sobre</a></li>
                                <li><a href="#actividades">Actividades</a></li>
                                <li><a href="#gallery">Galeria</a></li>
                                <li><a href="#contact">Contacto</a></li>
                            </ul>
                            <!-- ?php echo $uid; ?-->
                            <!-- Get Tickets Button -->
                            <!-- <a href="" onClick="countContact()" target="_blank"
                                class="btn confer-btn-white"> Chat <i class="zmdi zmdi-email"></i></a> -->
                            <a href="perfil/profile.php" class="btn confer-btn-white mt-3 mt-lg-0 ml-3 ml-lg-5"
                                id="user-name">Perfil<i class="zmdi zmdi-sign-in"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>

            </div>
        </div>
    </header>

    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area jarallax" style="background-color: #f2871c;">

        <div class="container h-100">
            <div class="row h-100 align-items-center">

                <div class="col-12">
                    <div class="breadcrumb-content">

                        <h2 id="page_title" class="page-title"><?php echo $pontoturistico; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Início</a></li>

                                <li id="breadcrumb_item" class="breadcrumb-item active" aria-current="page">
                                    <?php echo $pontoturistico; ?></li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <section class="confer-blog-details-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Post Details Area -->
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="pr-lg-4 mb-100">
                        <!-- Post Content -->
                        <div class="post-details-content">

                            <!-- Post Thumbnail -->
                            <div class="post-blog-thumbnail mb-30">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $video_link; ?>"
                                        allowfullscreen width="640" height="480"></iframe>
                                </div>
                            </div>

                            <!-- Post Title -->
                            <h4 class="post-title" id="about"><?php echo $pontoturistico; ?></h4>


                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a id="localization_first" class="post-date" href="#"><i
                                        class="zmdi zmdi-gps"></i><?php echo $localization; ?></a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-email"></i>Enviar mensagem</a>
                            </div>

                            <p id="description_first" style="white-space: pre-line"><?php echo $p1; ?></p>

                            <!-- Blockquote -->
                            <!-- <blockquote class="confer-blockquote">
                                <h5>Colleges together, this pivotal event will feature high level dialogue and strategies as well as be a Platform to recognize and celebrate the Top Education Brands in the Country.</h5>
                            </blockquote> -->



                            <p id="more_description" style="white-space: pre-line"><?php echo $p2; ?></p>
                        </div>


                        <!-- Post Author Area -->
                        <!--                        <div class="post-author-area d-flex align-items-center my-5" id="video-chat">-->
                        <!--                            &lt;!&ndash; Avatar &ndash;&gt;-->
                        <!--                            <div class="author-avatar">-->
                        <!--                                <img src="img/bg-img/53.jpg" alt="">-->
                        <!--                            </div>-->
                        <!--                            &lt;!&ndash; Author Content &ndash;&gt;-->
                        <!--                            <div class="author-content">-->
                        <!--                                <h5>Converse em video com UEM</h5>-->
                        <!--                                <span>Agendar video chat </span>-->
                        <!--                                <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing</p>-->
                        <!--                            </div>-->
                        <!--                        </div>-->





                        <!-- Comment Area -->

                        <!-- Leave A Reply -->
                        <div class="confer-leave-a-reply-form clearfix" id="contact">
                            <h4 class="mb-30">Enviar email</h4>

                            <!-- Leave A Reply -->
                            <div class="contact_form">
                                <form action="#" method="post">
                                    <div class="contact_input_area">
                                        <div class="row">
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="name" id="name"
                                                        placeholder="Seu Nome" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="name"
                                                        id="name-2" placeholder="Apelido" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control mb-30" name="email"
                                                        id="email" placeholder="E-mail" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="subject"
                                                        id="subject" placeholder="Seu Numero">
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control mb-30" id="Mensagem"
                                                        cols="30" rows="6" placeholder="Mensagem" required></textarea>
                                                </div>
                                            </div>
                                            <!-- Button -->

                                        </div>
                                    </div>
                                </form>

                                <div class="col-12">
                                    <a href="mailto:<?php echo $email; ?>"
                                        class="btn confer-btn-white mt-50 wow fadeInUp"
                                        style="background:#f8871f;border-radius:0px">Enviar Mensagem <i
                                            class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Blog Sidebar Area -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">


                    <div class="confer-sidebar-area mb-100">
                        <!-- <div class="text-center mb-30">

                            <a class="btn confer-btn-white" href="#" data-toggle="modal" data-target="#myModalAgenda"
                                role="button">Agendar Chat <span class="fa fa-wechat"></span> </a>

                        </div> -->


                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <!-- Post Author Widget -->
                            <div class="post-author-widget">
                                <!-- Thumbnail -->
                                <div class="post-author-avatar">
                                    <img src="<?php echo $img1; ?>" alt="">
                                </div>
                                <!-- Author Content -->
                                <div class="post-author-content">
                                    <h5 id="ponto_name"><?php echo $pontoturistico; ?></h5>
                                    <p id="location_and_contact">Contacto e Localização</p>
                                </div>
                                <!-- Social Info -->
                                <div class="author-social-info">
                                    <a href="https://www.google.com/maps/search/<?php echo $localization ?>"><i
                                            class="zmdi zmdi-map"></i></a>
                                    <a href="<?php echo $website ?>"><i class="zmdi zmdi-view-web"></i></a>
                                    <a href="tel:<?php echo $phone ?>"><i class="zmdi zmdi-phone"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area" id="actividades">
                            <h5 class="widget-title mb-30">Actividades</h5>




                            <?php
                        $ref = 'pontoturistico/'.$uid.'/actividade';
                        $fetchdata = $database->getReference($ref)->getValue();
                        $countCollege = 0;
                        ?>

                            <?php if($fetchdata != null):?>
                            <?php
                            foreach( $fetchdata as $key => $row):
                                $countCollege++;
                                if($countCollege == 5){
                                    break;
                                }
                                ?>
                            <!-- Single Recent Post Area -->
                            <div class="single-recent-post-area d-flex align-items-center">

                                <!-- Content -->
                                <div class="post-content">
                                    <a href="#" class="post-title"><?php echo $row['actividade']; ?></a>
                                    <!-- <a href="#" class="post-date"><i class="zmdi zmdi-time"></i> January 14, 2019</a> -->
                                </div>
                            </div>
                            <?php endforeach ?>
                            <?php endif?>

                            <?php if($countCollege > 4): ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalLong2">
                                Ver todas actividades
                            </button>
                            <?php endif; ?>

                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Actividades</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <?php
                                        $ref = 'pontoturistico/'.$uid.'/actividade';
                                        $fetchdata = $database->getReference($ref)->getValue();
                                        ?>

                                        <?php if($fetchdata != null):?>
                                        <?php foreach( $fetchdata as $key => $row):?>
                                        <!-- Single Recent Post Area -->
                                        <div class="single-recent-post-area d-flex align-items-center">
                                            <!-- Thumb -->

                                            <!-- Content -->
                                            <div class="post-content">
                                                <a href="#" class="post-title"><?php echo $row['actividade']; ?></a>
                                                <!-- <a href="#" class="post-date"><i class="zmdi zmdi-time"></i> January 14, 2019</a> -->
                                            </div>
                                        </div>
                                        <?php endforeach ?>
                                        <?php endif?>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Todos os cursos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fechar</button>
                                        <!--                                        <button type="button" class="btn btn-primary">Save changes</button>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->


                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <h5 class="widget-title mb-30">Tag de Navegação</h5>

                            <!-- Tag Cloud -->
                            <ul class="tag-cloud">
                                <li><a href="#location">Localização</a></li>
                                <li><a href="#contact">Contacto</a></li>
                                <li><a href="#galleria">Galeria</a></li>
                           
                            </ul>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area" id="gallery">
                            <h5 class="widget-title mb-30" >Galeria</h5>

                            <!-- Blog Area End -->
                            <div class=" footer-gallery">

                                <div class="row">

                                    <?php
                                    $ref = 'pontoturistico/'.$uid.'/gallery';
                                   $fetchdata = $database->getReference($ref)->getValue();
                                    ?>
                                    <?php if($fetchdata != null):?>
                                    <?php
                                       foreach( $fetchdata as $key => $row): ?>
                                    <div class="col-4">
                                        <a href="<?php echo $row['url']; ?>" class="single-gallery-item">

                                            <img class=" wow fadeInUp" data-wow-delay="300ms"
                                                src="<?php echo $row['url']; ?>" alt="">

                                        </a>
                                    </div>
                                    <?php endforeach ?>
                                    <?php endif?>
                                </div>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="myModalAgenda" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Agendar Chat</h5>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-100">

                            <form>
                                <div class="row no-margin">
                                    <div class="col-12">
                                        <div class="row no-margin">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <span class="form-label">Data</span>
                                                    <input class="form-control" id="data" name="data" type="date"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <span class="form-label">Hora</span>
                                                    <input class="form-control" id="time" name="time" type="time"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-btn">
                                                    <button onclick="add_agenda()"
                                                        class="submit-btn btn confer-btn-white">Agendar</button>
                                                </div>

                                            </div>

                                            <input type="hidden" id="itemId" name="itemId" value="">


                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="notify mt-30"><span id="notifyType" class=""></div>
                                    </div>
                                </div>
                            </form>


                        </div>

                    </div>
                    <div class="modal-footer">



                        <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Area Start -->
    <footer class="footer-area bg-img section-padding-100-0" style="background:#414c52">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget mb-60">
                            <!-- Footer Logo -->

                            <p>Obrigado por visitar nosso stand para mais informações entre em contacto conosco.</p>

                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="https://www.google.com/maps/search/<?php echo $localization; ?>" target="_blank"> <i
                                        class="zmdi zmdi-gps"></i></a>
                                <a href="<?php echo $website; ?>" target="_blank"  ><i class="zmdi zmdi-view-web"></i></a>
                                <a href="<?php echo "tel:".$phone; ?>" target="_blank"  ><i class="zmdi zmdi-phone"></i></a>
                                <a href="<?php echo "mailto:".$email; ?>" target="_blank" ><i class="zmdi zmdi-email"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget mb-60">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Contacto</h5>

                            <!-- Contact Area -->
                            <div class="footer-contact-info">
                                <p><i class="zmdi zmdi-map" id="location"></i> <?php echo $localization; ?></p>
                                <p><i class="zmdi zmdi-phone" id="phone"></i><?php echo $phone; ?></p>
                                <p><i class="zmdi zmdi-email" id="email_institute"></i> <?php echo $email; ?></p>
                                <p><i class="zmdi zmdi-globe" id="site"></i> <?php echo $website; ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget mb-60">
                            <!-- Widget Title -->

                            <h5 class="widget-title">Tag de Navegação</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#location">Localização</a></li>
                                <li><a href="#contact">Contacto</a></li>
                                <li><a href="#gallery">Galeria</a></li>
                      
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->

                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> Todos os direitos reservados <i class="fa fa-heart-o" aria-hidden="true"></i>
                                por <a href="https://educa.co.mz" target="_blank">Educa</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <!-- Footer Menu -->

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
    <!--firebase-->
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="js/db/app.js"></script>
    <script src="js/db/real-time-database.js"></script>
    <script>
    firebase.auth().onAuthStateChanged(function(user) {

        if (user) {

            firebase.database().ref('users').on('value', function(snapshot) {
                snapshot.forEach(function(item) {

                    if (item.val().userId !== null && item.val().userId !== undefined) {
                        var db_uid = item.val().userId.toString().trim();
                        var user_uid = user.uid.toString().trim();

                        if (db_uid == user_uid) {
                            var user_name = document.getElementById("user-name");
                            var name = item.val().name;

                            if (item.val().name.length > 20) {
                                name = item.val().name.substr(0, 20) + "..";
                            } else {
                                name = item.val().name;
                            }
                            user_name.innerHTML = name;
                            
                            sessionStorage.setItem('usuarioId', item.val().userId);
                        }

                    }

                });
            });

        } else {
            location.href = 'intro.php';
        }

    });
    </script>

    <script>
  


    function add_agenda() {
        var userId = user_uid;
        var username = user_name.innerHTML;
        var email = email_user.innerHTML;
        var data = document.getElementById("data").value;
        var time = document.getElementById("time").value;
        var chat = "<?php  echo $chat ?>";
        var uid = "<?php echo $_GET['id'] ?>";
        var title = "<?php echo $title ?>"
        var uidchat = uuidv4();
        var data = {
            userId: userId,
            username: username,
            title: title,
            data: data,
            email: email,
            time: time,
            chat: chat,
            uid: uid,
            uidchat: uidchat
        }

        firebase.database().ref().child('institution').child(uid).child("agendachat").child(uidchat).set(data,
            function(error) {
                if (error) {
                    alert("Data could not be saved." + error);
                } else {

                    location.href = "institute.php?id=<?php echo $uid?>";
                    funcaosucess();
                }
            });



        firebase.database().ref().child('users').child(userId).child("agendachat").child(uidchat).set(data,
            function(error) {
                if (error) {
                    alert("Data could not be saved." + error);
                } else {



                }
            });


    }
    // myFunction();
    //     function myFunction() {
    //         setTimeout(function() {
    //             alert("Chat Agendado com Sucesso, veja no seu perfil");
    //         }, 1000);
    //     }

    function funcaosucess() {
        $(".notify").toggleClass("active");
        $("#notifyType").toggleClass("success");

        setTimeout(function() {
            $(".notify").removeClass("active");
            $("#notifyType").removeClass("success");
        }, 10000);
    };

    function funcaofailure() {
        $(".notify").addClass("active");
        $("#notifyType").addClass("failure");

        setTimeout(function() {
            $(".notify").removeClass("active");
            $("#notifyType").removeClass("failure");
        }, 5000);
    };


    countVisits();

    function countVisits() {
        var visit = "<?php echo $visits ?>";
        var id = "<?php echo $uid ?>"

        firebase.database().ref().child('institution').child(id).child('visits').set(visit, function(error) {
            console.log(id + "-" + visit);
        });

    }


    function countContact() {
        var contact = "<?php echo $contact ?>";
        var id = "<?php echo $uid ?>";

        contact = Number(contact) + 1;

        firebase.database().ref().child('institution').child(id).child('contact').set(contact, function(error) {
            console.log(contact + " -- " + id);
        });

    }
    </script>
    <style>
    #success {
        background: #03a679;
        color: #f0f0f0;
    }

    #failure {
        background: #ff3939;
        color: #f0f0f0;
    }

    .notify {
        position: absolute;
        top: 0px;
        width: 100%;
        height: 0;
        box-sizing: border-box;
        color: white;
        text-align: center;
        background: rgba(0, 0, 0, .6);
        overflow: hidden;
        box-sizing: border-box;
        transition: height .2s;
    }

    #notifyType:before {
        display: block;
        margin-top: 15px;

    }

    .active {
        height: 50px;
    }

    .success:before {
        Content: "CHAT AGENDADO COM SUCESSO, VEJA NO SEU PERFIL!";
    }

    .failure:before {
        Content: "NÃO CONSEGUIMOS AGENDAR O CHAT, MUDE A DATA OU HORA!";
    }

    </style>
</body>

</html>

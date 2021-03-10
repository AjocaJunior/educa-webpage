<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Blog - Feira</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/educa/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->



    <?php

        include_once('includes/dbconfig.php');
        $ref = 'publication/';
        $fetchdata = $database->getReference($ref)->getValue();
        // $uid  = $_GET['id'];


    ?>

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off"  style="background:#414c52">
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
                        <div class="classynav">
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="index.php">Inicio</a></li>
                                    <li><a href="evento.php">Evento</a>
                                        <ul class="dropdown">
                                            <li><a href="evento.php#abertura">Abertura</a></li>
                                            <li><a href="evento.php#conferencias">Conferências</a></li>
                                            <li><a href="evento.php#webinares">Webinares</a></li>
                                            <li><a href="evento.php#encerramento">Encerramento</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="feira.php">Feira</a>
                                        <ul class="dropdown">
                                            <li><a href="feira.php#testes">Testes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="actividades-culturais.html">Cultura</a>
                                        <ul class="dropdown">

                                        <li><a href="cultura/pintura.html">Pintura</a></li>
                                        <li><a href="cultura/musica.html">Música</a></li>
                                        <li><a href="cultura/cinema.html">Cinema</a></li>
                                        <li><a href="cultura/teatro.html">Teatro</a></li>
                                        <li><a href="cultura/literatura.html">Literatura</a></li>
                                        <li><a href="cultura/danca.html">Dança</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="informacoes-diversas.html">Informações</a>
                                        <ul class="dropdown">
                                            <li><a href="informacoes-diversas.html#calendario">Calendário</a></li>
                                            <li><a href="informacoes-diversas.html#bolsas">Bolsas</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.php">Blog</a></li>
                                </ul>

                                <!-- Get Tickets Button -->
                                <a href="perfil/profile.html" class="btn confer-btn-white mt-3 mt-lg-0 ml-3 ml-lg-5"
                                    id="user-name">Perfil<i class="zmdi zmdi-sign-in"></i></a>
                            </div>
                            <!-- Nav End -->
                        </div>
                    
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area End -->
    <section class="our-speaker-area section-padding-150 jarallax ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" 
                        data-wow-delay="300ms">
                        
                        <h4 style="color: #414c52;">BLOG DE EXPOSITORES</h4>
                        <p>Informe-te sobre a Feira</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Blog Area Start -->
    <div class="our-blog-area section-padding-150-20 h-100">
        <div class="container">
            <div class="row">
                <?php 
                    $ref = '/publication';
                    $fetchdata = $database->getReference($ref)->getValue(); 
                    ?>

                <?php if($fetchdata != null):?>
                <?php foreach( $fetchdata as $key => $row):   ?>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb filla">
                            <img src="<?php echo $row['img'] ?>" alt=""   >
                        </div>
                        <div class="single-blog-text text-center">
                            <h6>
                            <a class="" href="#"><?php echo $row['title'] ?></a>
                            <h6>
                            
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i><?php echo $row['date'] ?></a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i><?php echo $row['author'] ?></a>
                            </div>

                            <?php
                                $pharagraph = "";

                                if(strlen($row['text']) > 14) {
                                    $pharagraph = substr($row['text'], 0, 90)."..";
                                } else {
                                    $pharagraph = $row['text'];
                                }
                            ?>
                            <p><?php echo  $pharagraph ;?></p>
                        </div>
                        <div class="blog-btn">
                            <a href="single-blog.php?id=<?php echo $row['uid'] ?>"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <?php endforeach ?>
            <?php endif?>
              
              
            </div>

            <!-- <div class="row">
                <div class="col-12">
                    <div class="more-blog-btn text-center">
                        <a class="btn confer-btn" href="#">Load more <i class="zmdi zmdi-refresh"></i></a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Our Blog Area End -->

    <!-- Footer Area Start -->
    <!-- Footer Area Start -->
    <footer class="footer-area bg-img section-padding-100-0" style="background:#414c52">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->

                    <!-- Copywrite Area -->
                    <div class="container">
                        <div class="copywrite-content">
                            <div class="row">
                                <!-- Copywrite Text -->
                                <div class="col-12 col-md-6">
                                    <div class="copywrite-text">
                                        <p style="color:white;">
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                            Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                            </script> EDUCA MOÇAMBIQUE</a>
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
    <style>
           .filla {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden
    }

    .filla a img {
        /* flex-shrink: 0;
        min-width: 100%;
        min-height: 100%;
        width: 90%;
        height: 200px;
        object-fit: cover; */
    }

    .filla img {
        flex-shrink: 0;
        min-width: 100%;
        min-height: 100%;
        width: 90%;
        height: 200px;
        object-fit: cover;
    }
    </style>
</body>

</html>
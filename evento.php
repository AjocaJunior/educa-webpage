<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Educa - Evento</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/educa/logo.png">

    <!-- Stylesheet -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>


    <?php 
    include_once('includes/dbconfig.php');
    $ref = 'evento/';
    $fetchdata = $database->getReference($ref)->getValue();
    $tipodiscurso='Discurso';
    $tipowebinar = 'Webinar';
    $tipoconferencia = 'Conferencia';
    $tipodiscursofim = 'DiscursoFim';
    $tipopalestra = 'Palestra';
   
    ?>
    <!-- /Preloader -->

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
                                <li><a href="evento.php">Evento</a>
                                    <ul class="dropdown">
                                        <li><a href="#abertura">Abertura</a></li>
                                        <li><a href="#conferencias">Conferências</a></li>
                                        <li><a href="#webinares">Webinares</a></li>
                                        <li><a href="#encerramento">Encerramento</a></li>

                                    </ul>
                                </li>
                                <li><a href="feira.php">Feira</a>
                                    <ul class="dropdown">
                                        <li><a href="feira.php#testes">Testes</a></li>
                                    </ul>
                                </li>
                                <li><a href="actividades-culturais.php">Cultura</a>
                                    <ul class="dropdown">

                                    <li><a href="actividades-culturais.php#novidade">Novidades</a></li>
                                        <li><a href="actividades-culturais.php#pontos">Turismo</a></li>
                                        <li><a href="actividades-culturais.php#jogos">Jogos</a></li>
                                    </ul>
                                </li>
                                <li><a href="informacoes-diversas.php">Informações</a>
                                    <ul class="dropdown">
                                        <li><a href="informacoes-diversas.php#blog">Blog</a></li>
                                        <li><a href="informacoes-diversas.php#calendario">Calendário</a></li>
                                        <li><a href="informacoes-diversas.php#bolsas">Bolsas</a></li>
                                    </ul>
                                </li>
                                <li><a href="index.php#contact">Contactos</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
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
    <!-- <section class="breadcrumb-area bg-img jarallax" style="background-color: #f2871c;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">EVENTO</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Evento</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Breadcrumb Area End -->



    <section id="abertura" class="our-blog-area  section-padding-150" style="background-color: #d7dbe0;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">

                        <h4 style="color: #414c52;">DISCURSOS DE ABERTURA</h4>
                    </div>
                </div>
                <?php
                
                $count = 0;
              
                ?>

                <!-- Single Blog Area -->

                <?php
                foreach( $fetchdata as $key => $row):
                    $count++;
                    $tipo=  $row['tipo'];
                    if($tipo==$tipodiscurso ){
                        
                ?>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <iframe class="embed-responsive-item" width="100%" height="100%"
                                src="<?php echo $row['video_link'] ?>" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Discurso de Abertura</a>

                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i
                                        class="zmdi zmdi-assignment"></i><?php echo $row['evento_titulo'] ?></a></br>
                                <a class="post-author" href="#"><i
                                        class="zmdi zmdi-account"></i><?php echo $row['moderador_nome']?></a>
                            </div>

                        </div>
                        <div class="blog-btn">
                            <a href="#" data-toggle="modal" data-target="#myModaldisc2"><i
                                    class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                </div>

                <?php

                }
                endforeach;
                ?>



            </div>
        </div>
    </section>




    <!-- Our Blog Area Start -->





    <!-- Our Blog Area Start -->
    <section id="conferencias" class="our-blog-area section-padding-50-20" style="background-color: #d7dbe0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Mesas de Debate</p>
                        <h4 style="color: #414c52;">CONFERÊNCIAS</h4>
                    </div>
                </div>
                <?php
                foreach( $fetchdata as $key => $row):
                    $count++;
                    $tipo=  $row['tipo'];
                    if($tipo==$tipoconferencia ){
                       
                ?>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <iframe class="embed-responsive-item" width="100%" height="100%"
                                src="<?php echo $row['video_link'] ?>" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#"><?php echo $row['evento_titulo'] ?></a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>
                                    <?php echo $row['data'] ?></a>
                            </div>
                            <p><?php echo $row['evento_descricao'] ?></p>
                        </div>
                        <div class="blog-btn">
                            <a href="#" data-toggle="modal" data-target="#myModal"><i class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <?php
}
endforeach;
?>




            </div>
        </div>
    </section>


    <!-- Our Blog Area End -->

    <!-- Our Blog Area End -->






    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-50-20" style="background:#f8871f" id="about">


        <!-- Counter Up Area -->
        <div class="countdown-up-area">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-12 col-md-3">
                        <!-- Countdown Text -->
                        <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <h6>DISPONÍVEL EM BREVE</h6>
                            <h4 style="color:#414c52">WEBINAR</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-9">
                        <div class="countdown-timer mb-100 wow fadeInUp" style="color:#414c52" data-wow-delay="300ms">
                            <div id="clock"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us And Countdown Area End -->


    <!-- Our Blog Area Start -->
    <section id="webinares" class="our-blog-area section-padding-50-20" style="background-color: #d7dbe0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">

                        <p>Webinares</p>

                        <h4 style="color: #414c52;">Nossos Webinares</h4>
                    </div>
                </div>
                <?php
                foreach( $fetchdata as $key => $row):
                    $count++;
                    $tipo=  $row['tipo'];
                    if($tipo==$tipowebinar ){
   
                ?>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <iframe class="embed-responsive-item" width="100%" height="100%"
                                src="<?php echo $row['video_link'] ?>" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#"><?php echo $row['evento_titulo'] ?></a>
                            <!-- Post Meta -->
                            <div class="post-meta">

                            </div>
                            <p><?php echo $row['evento_descricao'] ?></p>
                        </div>
                        <div class="blog-btn">
                            <a href="#" data-toggle="modal" data-target="#"><i class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <?php
}
endforeach;
?>




            </div>
        </div>
    </section>
    <!-- Our Blog Area End -->

    <!-- Our Blog Area End -->








    <!-- Our Blog Area Start -->
    <section id="blog" class="our-blog-area section-padding-50-20" style="background-color: #d7dbe0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Palestras</p>
                        <h4 style="color: #414c52;">Nossas Palestras</h4>

                    </div>
                </div>
                <?php
                foreach( $fetchdata as $key => $row):
                    $count++;
                    $tipo=  $row['tipo'];
                    if($tipo==$tipopalestra ){
   
                ?>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <iframe class="embed-responsive-item" width="100%" height="100%"
                                src="<?php echo $row['video_link'] ?>" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#"><?php echo $row['evento_titulo'] ?></a>
                            <!-- Post Meta -->
                            <div class="post-meta">

                            </div>
                            <p><?php echo $row['evento_descricao'] ?></p>
                        </div>
                        <div class="blog-btn">
                            <a href="#" data-toggle="modal" data-target="#myModal7"><i class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                </div>

                <?php
                }
                endforeach;
                ?>
            </div>
        </div>
    </section>
    <!-- Our Blog Area End -->

    <!-- Our Blog Area Start -->

    <section id="encerramento" class="our-blog-area section-padding-50-20" style="background-color: #d7dbe0;">
        <div class="container">
            <div class="row d-flex justify-content-center">
            
              

<div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>DISCURSOS</p>
                        <h4 style="color: #414c52;">DISCURSOS DE ENCERRAMENTO</h4>

                    </div>
                </div>

                <?php
                foreach( $fetchdata as $key => $row):

                    ?>
                    <?php
                    $count++;
                    $tipo=  $row['tipo'];
                    if($tipo==$tipodiscursofim ){
   
                ?>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <iframe class="embed-responsive-item" width="100%" height="100%"
                                src="<?php echo $row['video_link'] ?>" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#"><?php echo $row['evento_titulo'] ?></a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i
                                        class="zmdi zmdi-assignment"></i><?php echo $row['profissao'] ?></a></br>
                                <a class="post-author" href="#"><i
                                        class="zmdi zmdi-account"></i><?php echo $row['moderador_nome'] ?></a>
                            </div>

                        </div>
                        <div class="blog-btn">
                            <a href="#" data-toggle="modal" data-target="#myModaldisc4"><i
                                    class="zmdi zmdi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <?php
}
endforeach;
?>




            </div>
        </div>
    </section>
    <!-- Our Blog Area End -->




    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Dados dos Oradores</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-4">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/4.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/1.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Messias Manhiça</h6>
                                <p>Moderador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4">
                            <div class="speaker-single-thumb">
                                <img src="img/educa/3.jpg" alt="">
                            </div>

                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Agostinho dos Santos</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn "> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn "> <i
                                            class="zmdi zmdi-linkedin"></i></button></a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!-- MODAL INÍCIO-->
    <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Dados dos Oradores</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-4">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/4.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>


                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/1.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Messias Manhiça</h6>
                                <p>Moderador</p>
                                <p>The greatest speaker the world knows</p>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4">
                            <div class="speaker-single-thumb">
                                <img src="img/educa/3.jpg" alt="">
                            </div>

                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Agostinho dos Santos</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>


                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--MODAL FIM-->
    <!-- MODAL 2 INÍCIO -->
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Dados dos Oradores</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-4">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/4.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/1.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Messias Manhiça</h6>
                                <p>Moderador</p>
                                <p>The greatest speaker the world knows</p>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4">
                            <div class="speaker-single-thumb">
                                <img src="img/educa/3.jpg" alt="">
                            </div>

                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Agostinho dos Santos</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--MODAL FIM-->
    <!-- MODAL 3 INÍCIO-->
    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Dados dos Oradores</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-4">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/4.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/1.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Messias Manhiça</h6>
                                <p>Moderador</p>
                                <p>The greatest speaker the world knows</p>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4">
                            <div class="speaker-single-thumb">
                                <img src="img/educa/3.jpg" alt="">
                            </div>

                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Agostinho dos Santos</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--MODAL FIM-->
    <!-- MODAL 4 INÍCIO-->
    <div id="myModal4" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Dados dos Oradores</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-4">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/4.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>


                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/1.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Messias Manhiça</h6>
                                <p>Moderador</p>
                                <p>The greatest speaker the world knows</p>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4">
                            <div class="speaker-single-thumb">
                                <img src="img/educa/3.jpg" alt="">
                            </div>

                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Agostinho dos Santos</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--MODAL FIM-->
    <!-- MODAL 5 INÍCIO-->
    <div id="myModal5" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Dados dos Oradores</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-4">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/4.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col col-md-4 col-sm-4 ">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/1.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Messias Manhiça</h6>
                                <p>Moderador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4 ">
                            <div class="speaker-single-thumb">
                                <img src="img/educa/3.jpg" alt="">
                            </div>

                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Agostinho dos Santos</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--MODAL FIM-->
    <!-- MODAL 6 INÍCIO-->
    <div id="myModal6" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Dados dos Oradores</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-4  ">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/4.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>

                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4  ">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/1.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Messias Manhiça</h6>
                                <p>Moderador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4  ">
                            <div class="speaker-single-thumb">
                                <img src="img/educa/3.jpg" alt="">
                            </div>

                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Agostinho dos Santos</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--MODAL FIM-->
    <!-- MODAL 7 INÍCIO-->
    <div id="myModal7" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Dados dos Oradores</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-4  ">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/4.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4 ">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/1.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Messias Manhiça</h6>
                                <p>Moderador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4  ">
                            <div class="speaker-single-thumb">
                                <img src="img/educa/3.jpg" alt="">
                            </div>

                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Agostinho dos Santos</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--MODAL FIM-->
    <!-- MODAL 8 INÍCIO-->
    <div id="myModal8" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Dados dos Oradores</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-4  ">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/4.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>



                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4  ">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/1.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Messias Manhiça</h6>
                                <p>Moderador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>

                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4 ">
                            <div class="speaker-single-thumb">
                                <img src="img/educa/3.jpg" alt="">
                            </div>

                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Agostinho dos Santos</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--MODAL FIM-->
    <!-- MODAL 9 INÍCIO-->
    <div id="myModal9" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Dados dos Oradores</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-4 ">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/4.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4 ">

                            <div class="speaker-single-thumb">
                                <img src="img/educa/1.jpg" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Messias Manhiça</h6>
                                <p>Moderador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                        <div class="col-12 col-md-4 col-sm-4 ">
                            <div class="speaker-single-thumb">
                                <img src="img/educa/3.jpg" alt="">
                            </div>

                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Agostinho dos Santos</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>

                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--MODAL FIM-->

    <!--MODAL DISCURSO 1-->
    <div id="myModaldisc5" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Detalhes</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">

                    <div class="row">

                        <div class="col">
                            <div class="speaker-single-thumb text-center">
                                <img src="img/educa/3.jpg" width="50%" height="50%;" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>



                                <a href="https://www.facebook.com" target="_blank"><button class="btn confer-btn-white">
                                        <i class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn confer-btn-white"> <i
                                            class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn confer-btn-white"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn confer-btn-white"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a></br>
                                <button class="btn confer-btn-white">Chat</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--FIM DO MODAL DISCURSO 1-->


    <!--MODAL DISCURSO 2-->
    <div id="myModaldisc2" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Detalhes</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col">

                            <div class="speaker-single-thumb text-center">
                                <img src="img/educa/4.jpg" width="50%;" height="50%" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Carmelina Nhamashulua</h6>
                                <p>Ministra da Educação</p>
                                <p>The greatest speaker the world knows</p>

                                <button class="btn confer-btn-white">Chat</button>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn confer-btn-white">
                                        <i class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn confer-btn-white"> <i
                                            class="zmdi zmdi-instagram""></i></button></a>
                                    <a href=" #" target="_blank"><button class="btn confer-btn-white"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn confer-btn-white"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a>


                            </div>

                        </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--FIM DO MODAL DISCURSO 2-->

    <!--MODAL DISCURSO 3-->
    <div id="myModaldisc3" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Detalhes</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">


                        <div class="col">
                            <div class="speaker-single-thumb text-center">
                                <img src="img/educa/3.jpg" width="50%" height="50%;" alt="">
                            </div>

                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Agostinho dos Santos</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>

                                <a href="https://www.facebook.com" target="_blank"><button class="btn confer-btn-white">
                                        <i class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn confer-btn-white"> <i
                                            class="zmdi zmdi-instagram""></i></button></a>
                                    <a href=" #" target="_blank"><button class="btn confer-btn-white"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn confer-btn-white"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--FIM DO MODAL DISCURSO 3-->

    <!--MODAL DISCURSO 4-->
    <div id="myModaldisc4" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Detalhes</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">

                            <div class="speaker-single-thumb text-center">
                                <img src="img/educa/4.jpg" width="50%;" height="50%;" alt="">
                            </div>
                            <!-- Info -->
                            <div class="speaker-info text-center">
                                <h6>Assis Junior</h6>
                                <p>Orador</p>
                                <p>The greatest speaker the world knows</p>

                                <button class="btn confer-btn-white">Chat</button>
                                <a href="https://www.facebook.com" target="_blank"><button class="btn confer-btn-white">
                                        <i class="zmdi zmdi-facebook"></i></button></a>
                                <a href="#" target="_blank"><button class="btn confer-btn-white"> <i
                                            class="zmdi zmdi-instagram""></i></button></a>
                                <a href=" #" target="_blank"><button class="btn confer-btn-white"> <i
                                                    class="zmdi zmdi-twitter"></i></button></a>
                                <a href="#" target="_blank"><button class="btn confer-btn-white"> <i
                                            class="zmdi zmdi-linkedin"></i></button></a>
                            </div>

                        </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn confer-btn-white" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
    <!--FIM DO MODAL DISCURSO 4-->
    <!-- Our Gallery Area Start -->

    <!-- Our Gallery Area End -->



    <!-- Footer Area Start -->
    <footer class="footer-area  section-padding-100-0" style="background-color: #414c52;">
        <!-- Main Footer Area -->

        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Area -->
                    <div class="container">
                        <div class="copywrite-content">
                            <div class="row">
                                <!-- Copywrite Text -->
                                <div class="col-12 col-md-6">
                                    <div class="copywrite-text">
                                        <p style="color: white;">
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                            Copyright &copy;
                                            <script>
                                            document.write(new Date().getFullYear());
                                            </script> <i class="fa fa-heart-o" aria-hidden="true"></i> EDUCA
                                            MOÇAMBIQUE</a>
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        </p>
                                    </div>
                                </div>
                                <!-- Footer Menu -->

                            </div>
                        </div>
                    </div>
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
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="js/db/app.js"></script>
    <script src="js/db/real-time-database.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  
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
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        var maxY = 1000;

        if ('scrollMaxX' in window) {
            maxY = window.scrollMaxX;
        } else {
            maxY = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        }

        if (scrolled > (maxY / 2)) {
            if (popupGameObject() !== null) {
                if (popupGameObject().date == getDate()) {
                    if (popupGameObject().isSwowed == false) {
                        //show popup
                        showNotification()
                        console.log("Show")
                    } else {
                        // dont show
                        console.log("dont Show")
                    }
                } else {
                    //show popup
                    showNotification()
                    console.log("Show")
                }
            } else {
                //show popup
                showNotification()
                console.log("Show")
            }
        }

    });


    function popupGameObject() {
        if (typeof(Storage) !== "undefined") {
            if (localStorage.getItem('itemPlay') !== null) {
                return JSON.parse(localStorage.getItem('itemPlay'));
            } else {
                return null;
            }
        }
    }

    function getDate() {
        now = new Date
        date = now.getDate() + "/" + (now.getMonth() + 1) + "/" + now.getFullYear();
        return date;
    }


    function showNotification() {

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Quer ganhar bolsa de estudo ou laptop?',
            text: "Roleta da sorte",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim, quero!',
            cancelButtonText: 'Nao!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "raffle.php"
                // swalWithBootstrapButtons.fire(
                //   'Deleted!',
                //   'Your file has been deleted.',
                //   'success'
                // )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                cancelPopup()
                swalWithBootstrapButtons.fire(
                    'Opppsss',
                    'Voce perdeu a chance de ganhar :{',
                    'error'
                )
            }
        })
    }

    function cancelPopup() {
        status = "canceled";
        var playGame = {
            status: status,
            isShowed: true,
            date: getDate()
        }

        localStorage.setItem('itemPlay', JSON.stringify(playGame));
    }
    </script>


</body>

</html>

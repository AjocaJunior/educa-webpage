<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Educa - Feira e Conferência Internacional de Educação</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/educa/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/carousel.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
    <!-- 
    check if the user is logging in for the first time -->

    <?php

$data1= '2021-04-14';
$data2 = '2021-04-15';
$data3 = '';
$data4 = '';
$data5 = '';

    // session_start();

    // $timeout = 7200; 

    // if(isset($_SESSION['timeout'])) {
    //     $duracao = time() - (int) $_SESSION['timeout'];
    //     if($duracao > $timeout) {
    //         session_start();
    //         session_destroy();
    //         session_unset();
    //         echo "<script type='text/javascript'>location.href='intro.php'</script>";
    //     }
    // }else{
    //     echo "<script type='text/javascript'>location.href='intro.php'</script>";
    // }
    ?>

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off " style="background:#414c52">
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
                                        <li><a href="evento.php#abertura">Abertura</a></li>
                                        <li><a href="evento.php#conferencias">Conferências</a></li>
                                        <li><a href="evento.php#webinares">Webinares</a></li>
                                        <li><a href="evento.php#encerramento">Encerramento</a></li>
                                        <!-- <li><a href="raffle.php">Sorteio</a></li> -->

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
                                        <li><a href="actividades-culturais.php#pontos">Pontos</a></li>
                                        <li><a href="actividades-culturais.php#jogos">Jogos</a></li>
                                        <li><a href="raffle.php">Sorteio</a></li>
                                    </ul>
                                </li>
                                <li><a href="informacoes-diversas.php">Informações</a>
                                    <ul class="dropdown">
                                        <li><a href="informacoes-diversas.php#blog">Blog</a></li>
                                        <li><a href="informacoes-diversas.php#calendario">Calendário</a></li>
                                        <li><a href="informacoes-diversas.php#bolsas">Bolsas</a></li>
                                    </ul>
                                </li>
                                <li><a href="#contact">Contactos</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="perfil/profile.php" class="btn confer-btn-white mt-3 mt-lg-0 ml-3 ml-lg-5"
                                id="user-name">Usuário</a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel" id="carousel-example">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img item jarallax ">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-left">
                                <h1 data-animation="fadeInUp" data-delay="300ms"> Educa</h1>
                                <h2 data-animation="fadeInUp" data-delay="300ms"> Moçambique</h2>
                                <h6 data-animation="fadeInUp" data-delay="500ms">Feira e Conferência Internacional de
                                    Educação</h6>
                                <div class="hero-btn-group margin-btn" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="live.php" target="_blank" class="btn confer-btn-white"> Ver live <i
                                            class="zmdi zmdi-play-circle"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img item jarallax">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text-two text-center">
                                <h5 data-animation="fadeInUp" data-delay="100ms">Abertura da</h5>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Feira Internacional de Educação</h2>
                                <!-- Event Meta -->

                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="live.php" target="_blank" class="btn confer-btn-white m-2">VER LIVE<i
                                            class="zmdi zmdi-play-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Icon -->
        <div class="icon-scroll" id="scrollDown"></div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="about" style="background:#e9eef4">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">LIVE STREAM</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms" style="color:#414c52">Junta-te as mesas de
                            debate</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms" style="color:#414c52">
                            Participe das mesas de debate onde poderás aprender e discutir sobre assuntos relacionados a
                            educação
                        </p>
                        <a href="live.php" class="btn confer-btn-white  mt-50 wow fadeInUp" target="_blank"
                            data-wow-delay="300ms">Ver
                            Live<i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>



                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <a href="live.php" target="_blank">
                        <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                            <img src="img/live/live3.jpg" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Counter Up Area -->
        <div class="countdown-up-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <!-- Countdown Text -->
                        <div class="countdown-content-text mb-40 wow fadeInUp" data-wow-delay="300ms">
                            <h6>Horario</h6>
                            <h4 style="color:#414c52">WEBINAR A CAMINHO</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-9">
                        <div class="countdown-timer mb-40 wow fadeInUp" data-wow-delay="300ms">
                            <div id="clock" style="color:#414c52"></div> <!-- active.js -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php           
include_once('includes/dbconfig.php');         
$ref = 'anuncio/';
$fetchdata = $database->getReference($ref)->getValue();

                $count = 0;
                if($fetchdata != null):?>
    <?php foreach( $fetchdata as $key => $row):
                        $count++;
                        if ($row['anuncio_name']=='Vodacom Banner Website'):
                    //   shuffle($row['data']); 
                        ?>
    <section style="background: #e9eef4;">
        <div class="container">
            <?php if($row['direcionamento']=='Website'){?>
            <a href="https://<?php echo $row['data']; ?>" class="" target="_blank">
                <img src="<?php echo $row['img1']; ?>" />
            </a>
            <?php }else if($row['direcionamento']=='Chamada'){?>
            <a href="tel:<?php echo $row['data']; ?>" class="" target="_blank">
                <img src="<?php echo $row['img1']; ?>" />
            </a>
            <?php } ?>
        </div>
    </section>
    <?php endif ?>
    <?php endforeach ?>
    <?php endif?>

    <!-- About Us And Countdown Area End -->
    <!-- Our Schedule Area Start -->

    <section class="our-schedule-area section-padding-80-0" style="background: #e9eef4;">

        <div class="container">
            <?php           
include_once('includes/dbconfig.php');         
$ref = 'evento/';

$fetchdata = $database->getReference($ref)->getValue();

            $count = 0;
            if($fetchdata != null):?>
            <div class="row">



                <div class="col-12">


                    <div class="schedule-tab">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="monday-tab" data-toggle="tab" href="#step-one" role="tab"
                                    aria-controls="step-one" aria-expanded="true">Quarta-feira <br> <span>14 de Abril,
                                        2021</span></a>
                            </li>
                            <!-- Nav Item -->

                            <li class="nav-item">
                                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab"
                                    aria-controls="step-two" aria-expanded="true">Quinta-feira <br> <span>15 de Abril,
                                        2021</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">





                        <div class="col-12">


                            <!-- Tab Content SEGUNDA-->
                            <div class="tab-content" id="conferScheduleTabContent">
                                <div class="tab-pane fade show active" id="step-one" role="tabpanel"
                                    aria-labelledby="monday-tab">
                                    <?php
                                    foreach( $fetchdata as $key => $row):
                                        $count++;
                                        $data=  $row['data'];
                                        if($data1==$data ){
                                            
                                    ?>
                                    <!-- Single Tab Content -->
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Single Schedule Area -->


                                                <!-- Single Schedule Area -->
                                                <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp"
                                                    data-wow-delay="300ms">
                                                    <!-- Single Schedule Thumb and Info -->
                                                    <div class="single-schedule-tumb-info d-flex align-items-center">
                                                        <!-- Single Schedule Thumb -->
                                                        <div class="single-schedule-tumb">
                                                            <img src="<?php echo $row['icon']?>" alt="">
                                                        </div>
                                                        <!-- Single Schedule Info -->
                                                        <div class="single-schedule-info">
                                                            <h6><?php echo $row['tipo'] ?> <i>“<?php echo $row['evento_titulo'] ?>”</i>
                                                            </h6>
                                                           
                                                            <?php 
                                                            $reff = 'evento/'.$row['uid'].'/orador';

                                                            $fetchdataa = $database->getReference($reff)->getValue();
                                                            if($fetchdata!=null){?>
                                                                <p>Oradores</p>
                                                                <?php
                                                                 foreach( $fetchdataa as $key => $roww):
                                                                
                                                                ?>
                                                               
                                                                  <p><span><?php echo $roww['orador_nome']?></span></p>
                                                            <?php
                                                        endforeach;
                                                            }
                                                         ?>
                                                            
                                                                <?php if($row['profissao'] ==true):?>
                                                            <p>Moderador: <span><?php echo $row['profissao']?> - <?php echo $row['moderador_nome']?></span></p>
                                                            <?php endif; ?> 
                                                        </div>
                                                    </div>
                                                    <!-- Single Schedule Info -->
                                                    <div class="schedule-time-place">
                                                        <p><i class="zmdi zmdi-time"></i><?php echo $row['start_time'] ?>  - <?php echo $row['end_time'] ?>  </p>
                                                    </div>
                                                    <!-- Schedule Btn -->
                                                    <a href="<?php echo $row['botao_link']; ?>"
                                                        class="btn confer-btn-white">Assistir<i
                                                            class="zmdi zmdi-long-arrow-right"></i></a>
                                                </div>



                                                <!-- Single Schedule Area -->

                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                            }
                                            endforeach;
                                            ?>

                                </div>
                                <!--TAB TERÇA-->
                                <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                                    <!-- Single Tab Content -->
                                    <?php
                                    foreach( $fetchdata as $key => $row):
                                        $count++;
                                        $data=  $row['data'];
                                        if($data2==$data ){
                                            
                                    ?>
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Single Schedule Area -->
                                                <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp"
                                                    data-wow-delay="300ms">
                                                    <!-- Single Schedule Thumb and Info -->
                                                    <div class="single-schedule-tumb-info d-flex align-items-center">
                                                        <!-- Single Schedule Thumb -->
                                                        <div class="single-schedule-tumb">
                                                            <img src="<?php echo $row['icon']?>" alt="">
                                                        </div>
                                                        <!-- Single Schedule Info -->
                                                        <div class="single-schedule-info">
                                                            <h6><?php echo $row['tipo'] ?> <i>“<?php echo $row['evento_titulo'] ?>”</i>
                                                            </h6>
                                                            
                                                            <?php 
                                                            $reff = 'evento/'.$row['uid'].'/orador';

                                                            $fetchdataa = $database->getReference($reff)->getValue();
                                                            if($fetchdata!=null){
                                                            ?>
                                                            <p>Oradores </p>
                                                              <?php   foreach( $fetchdataa as $key => $roww):
                                                                
                                                                ?>
                                                                
                                                                  <p><span><?php echo $roww['orador_nome']?></span></p>
                                                            <?php
                                                        endforeach;
                                                    }
                                                         ?>
                                                           
                                                         

                                                            <?php if($row['profissao'] ==true):?>
                                                            <p>Moderador:<span> <?php echo $row['profissao']?> - <?php echo $row['moderador_nome']?></span></p>
                                                            <?php endif; ?> 
                                                        </div>
                                                    </div>
                                                    <!-- Single Schedule Info -->
                                                    <div class="schedule-time-place">
                                                        <p><i class="zmdi zmdi-time"></i> <?php echo $row['start_time'] ?>  - <?php echo $row['end_time'] ?> </p>

                                                    </div>
                                                    <!-- Schedule Btn -->
                                                    <a href="<?php echo $row['botao_link']; ?>"
                                                        class="btn confer-btn-white">Assistir<i
                                                            class="zmdi zmdi-long-arrow-right"></i></a>
                                                </div>
                                                <!-- Single Schedule Area -->


                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            }
                                            endforeach;
                                            ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endif?>
                </div>
    </section>


    <!---CAROUSEL SPEAKERS-->
    <section class="our-speaker-area section-padding-80-50" style="background-image:url(img/bg-img/bgtransp2.png)">
        <div class="row">
            <div class="col-12">
                <!-- Heading -->
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                    <p>Oradores</p>
                    <h4>Nossos Oradores</h4>
                </div>
            </div>
        </div>

        <!-- Top content -->
        <div class="top-content">
            <div class="container-fluid">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <?php
                include_once('includes/dbconfig.php');
                $ref = 'speaker/';
                $fetchdata = $database->getReference($ref)->getValue();
                $count = 0;
                ?>
                    <div class=" row w-100 mx-auto">

                        <?php
                foreach( $fetchdata as $key => $row):
                    $count++;
                    if ($count == 9){
                        break;
                    }
                ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp">
                                <!-- Thumb -->
                                <div class="speaker-single-thumb fill">
                                    <img src="<?php echo $row['img']?>" class="img-fluid mx-auto d-block " alt="img1">
                                </div>
                                <!-- Social Info -->
                                <div class="social-info">
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>

                                    <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                </div>
                                <!-- Info -->
                                <div class="speaker-info-orador">
                                    <h5><?php echo $row['name']?></h5>
                                    <p><?php echo $row['profession'] ?></p>
                                </div>
                            </div>


                        </div>


                        <?php
                endforeach;
                ?>


                    </div>
                    <!--ROW END -->


                </div>
                <div class="col-md-12 text-center">
                    <a href="evento.php" class="btn confer-btn-white  mt-50 wow fadeInUp text-center"
                        style="background:#f8871f;border-radius:0px;" data-wow-delay="300ms">Ver Oradores<i
                            class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Blog Area Start -->
    <section id="blog" class="our-blog-area section-padding-50-20" style="background-color:#e9eef4 ;">
        <div class="container">
            <div class="row" style="text-align:center">
                <?php
                include_once('includes/dbconfig.php');
                $ref = 'institution/';
                $fetchdata = $database->getReference($ref)->getValue();
                $count = 0;
                ?>


                <div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>EXPOSIÇÕES</p>
                        <h4>Expositores da Feira</h4>
                    </div>
                </div>
                <?php
                foreach( $fetchdata as $key => $row):
                    $count++;
                    if ($count == 9){
                        break;
                    }
                ?>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb ">
                            <a
                                href="<?php echo  $row['category'] == 2 ? "institute.php?id=".$row['uid'] : "company.php?id=".$row['uid'];  ?>">

                                <img class="" src="<?php echo $row['img1']; ?>"
                                    style="object-fit:cover; height:200px;width:100%; background:white; text-align:center;"
                                    alt="">
                            </a>
                        </div>
                        <div class="single-blog-text text-center">

                            <?php
                              $title = "";

                              if(strlen($row['institution_name']) > 20){
                                  $title = substr($row['institution_name'],0, 20)."...";
                              }else{
                                  $title = $row['institution_name'];
                              }
                             
                             ?>
                            <a class=""
                                href="<?php echo  $row['category'] == 2 ? "institute.php?id=".$row['uid'] : "company.php?id=".$row['uid'];  ?>"><?php echo $title; ?></a>
                            <!-- Post Meta -->


                        </div>
                        <div class="blog-btn">
                            <a
                                href="<?php echo  $row['category'] == 2 ? "institute.php?id=".$row['uid'] : "company.php?id=".$row['uid'];  ?>"><i
                                    class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>


                </div>
                <?php
                endforeach;
                ?>

                <div class="col-md-12 text-center">
                    <a href="feira.php" class="btn confer-btn-white  mt-50 wow fadeInUp text-center"
                        style="background:#f8871f;border-radius:0px;" data-wow-delay="300ms">Ver Expositores<i
                            class="zmdi zmdi-long-arrow-right"></i></a>
                </div>

            </div>



        </div>


        </div>
    </section>
    <!-- Our Blog Area End -->



    <!-- Our Ticket Pricing Table Area End -->



    <!-- Our Blog Area Start -->

    <!-- Our Blog Area End -->


    <!-- Contact Area Start -->
    <section id="contact" class="contact-our-area section-padding-80-0 bg-design">

        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <!-- <p>Have Question?</p> -->
                        <h4 style="color: #414c52;">CONTACTOS</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>LOCALIZAÇÃO:</p>
                            <h6 style="color: #414c52;">Av. Albert Lithuli, nr 300, R/c Cidade de Maputo</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Contacto:</p>
                            <h6 style="color: #414c52;">+258 21 320 959</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Email:</p>
                            <h6 style="color: #414c52;">comercial@educa.co.mz</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Website:</p>
                            <h6 style="color: #414c52;">www.educa.co.mz</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8">
                    <!-- Contact Form -->
                    <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                        <div class="contact_form">
                            <form action="mail.php" method="post" id="main_contact_form">

                                <div class="contact_input_area">

                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" tabindex="1" class="form-control mb-30" name="name"
                                                    id="name" placeholder="Seu nome">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" tabindex="2" class="form-control mb-30"
                                                    name="apelido" id="name2" placeholder="Sobre nome">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" tabindex="3"
                                                    class="form-control mb-30 <?= $invalid_class_name ?? "" ?> "
                                                    name="email" id="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="tel" tabindex="4" class="form-control mb-30" name="contact"
                                                    id="contact" placeholder="Seu numero">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" tabindex="5" class="form-control mb-30"
                                                    id="message" cols="30" rows="6"
                                                    placeholder="Sua mensagem *"></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn-white">Enviar messagem <i
                                                    class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
    <!-- Our Sponsor And Client Area Start -->
    <section class="our-sponsor-client-area section-padding-50">
        <div class="container-fluid">


            <div class="row">
                <div class="col-2">
                    <div class="section-heading-4 sponsor-h4 text-left wow fadeInUp" data-wow-delay="300ms">
                        <!-- <p>Partners &amp; Sponsors</p> -->
                        <h6>ORGANIZAÇÃO</h6>
                    </div>
                    <!-- Our Sponsor area -->
                    <div class="our-sponsor-area d-flex flex-wrap">
                        <!-- Single Sponsor -->
                        <div class="single-sponso wow fadeInUp " style="margin-top: 20px;" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/NewCADELogoSlogan.png" alt=""></a>
                        </div>
                    </div>

                </div>

                <div class="col-2">
                    <div class="section-heading-4 sponsor-h4 text-left wow fadeInUp" data-wow-delay="300ms">
                        <!-- <p>Partners &amp; Sponsors</p> -->
                        <h6>PRODUÇÃO</h6>
                    </div>
                    <!-- Our Sponsor area -->
                    <div class="our-sponsor-area d-flex  flex-wrap">
                        <!-- Single Sponsor -->
                        <div class="single-sponso wow fadeInUp" style="margin-top: 20px;" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/ONEMEDIA.png" alt=""></a>
                        </div>

                    </div>
                </div>

                <div class="col-8">
                    <div class="section-heading-4 sponsor-h4 text-left wow fadeInUp" data-wow-delay="300ms">

                        <h6>PARCEIROS</h6>
                    </div>

                    <div class="our-sponsor-area d-flex flex-wrap">
                        <div class="single-spons wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/Radio.png" alt=""></a>
                        </div>
                        <div class="single-spons wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/logonew01.png" alt=""></a>
                        </div>

                        <div class="single-spons wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/UP.png" alt=""></a>
                        </div>

                        <div class="single-spons wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/UEMLOGO.png" alt=""></a>
                        </div>

                        <div class="single-spons wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/GPDNET.png" alt=""></a>
                        </div>

                        <div class="single-spons wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/sosLogo.png" alt=""></a>
                        </div>
                        <div class="single-spons wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/cepaepsimbolo.png" alt=""></a>
                        </div>
                    </div>
                </div>

                <!-- Single client Icon -->

            </div>
        </div>

    </section>
    <!-- Our Sponsor And Client Area End -->
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
    <!-- <script src="js/owl.carousel.min.js"></script> -->
    <!-- <script src="mail.js"></script> -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <!-- <script src="js/owl.carousel.js"></script> -->


    <script src="js/carousel.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="js/db/app.js"></script>
    <script src="js/db/real-time-database.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

    <!-- custom lib popup -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <!-- end custom lib popup  -->

    <script>
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        console.log(scrolled);
        if (scrolled > 2666 && scrolled < 3000) {

            if (!isShowed()) {
                showGameDialog();
                localStorage.getItem('itemPlay');


            } else {
                showNotification();
                console.log("Showed")
            }

        }

    });

    function showGameDialog() {

        Swal.fire({
            position: 'center',
            title: '#Estou na feira',
            text: "Compartilha com os amigos #ESTOU NA FEIRA!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Compartilhar'
        }).then((result) => {
            if (result.isConfirmed) {
                showed();
                location.href = "https://www.facebook.com/sharer/sharer.php?u=www.educa.co.mz"
            } else {
                showed();
            }
        })

    }

    // this function check if popup isShowed //
    function isShowed() {
        if (typeof(Storage) !== "undefined") {
            if (localStorage.getItem('isShowed') !== null) {
                return localStorage.getItem("isShowed");
            } else {
                return false;
            }

        } else {
            return false;
        }
    }

    function showed() {

        if (typeof(Storage) !== "undefined") {
            localStorage.setItem('isShowed', true)
        } else {
            //todo
        }
    }
    </script>


    <script>
    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {
            slideIndex = 1
        }
        x[slideIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }


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
                            localStorage.setItem('usuarioId', item.val().userId);
                        }

                    }

                });
            });

        } else {
            location.href = 'intro.php';
        }

    });
    </script>

    <style>
    .filla img {
        /* flex-shrink: 0;
        min-width: 100%;
        min-height: 100%;
        width: 90%;
        height: 200px; */
        object-fit: cover;
    }

    .fill {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .fill img {
        flex-shrink: 0;
        min-width: 100%;
        min-height: 100%;
        width: 90%;
        height: 200px;
        object-fit: cover;
    }

    </style>

    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12799908;;
    (function(n, t, c) {
        function i(n) {
            return e._h ? e._h.apply(null, n) : e._q.push(n)
        }
        var e = {
            _q: [],
            _h: null,
            _v: "2.0",
            on: function() {
                i(["on", c.call(arguments)])
            },
            once: function() {
                i(["once", c.call(arguments)])
            },
            off: function() {
                i(["off", c.call(arguments)])
            },
            get: function() {
                if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                return i(["get", c.call(arguments)])
            },
            call: function() {
                i(["call", c.call(arguments)])
            },
            init: function() {
                var n = t.createElement("script");
                n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                    t.head.appendChild(n)
            }
        };
        !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
    }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechatinc.com/chat-with/12799908/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->

</body>

</html>

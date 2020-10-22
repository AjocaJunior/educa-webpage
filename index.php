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
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.php"><img src="./img/educa/logo.png" alt=""></a>

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
                                <li><a href="evento.html">Evento</a>
                                    <ul class="dropdown">
                                        <li><a href="evento.html#abertura">Abertura</a></li>
                                        <li><a href="evento.html#conferencias">Conferências</a></li>
                                        <li><a href="evento.html#webinares">Webinares</a></li>
                                        <li><a href="evento.html#encerramento">Encerramento</a></li>
                                    
                                    </ul>
                                </li>
                                <li><a href="feira.php">Feira</a>

                            </li>
                                <li><a href="actividades-culturais.html">Cultura</a>
                                <ul class="dropdown">
                                        <li><a href="actividades-culturais.html#galeria">Galeria</a></li>
                                        <li><a href="actividades-culturais.html#jogos">Jogos</a></li>
    </ul>
                            </li>
                                <li><a href="informacoes-diversas.html">Informações</a></li>
                                <li><a href="#contact">Contactos</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="perfil/profile.html" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5" id="user-name">REGISTRE-SE AGORA <i class="zmdi zmdi-sign-in"></i></a>
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
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/backgroundeducaonline.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms"> Educa <br>Moçambique</h2>
                                <h6 data-animation="fadeInUp" data-delay="500ms">Feira e Conferência Internacional de Educação</h6>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="live.html" class="btn confer-btn"> Ver live <i class="zmdi zmdi-play-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/backgroundeducaonline1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text-two text-center">
                                <h5 data-animation="fadeInUp" data-delay="100ms">Abertura da</h5>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Feira Internacional de Educação</h2>
                                <!-- Event Meta -->
                               
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                         <a href="live.html" class="btn confer-btn m-2">VER LIVE<i class="zmdi zmdi-play-circle"></i></a>
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
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">SOBRE NÓS</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">Seja bem vindo a educa</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">
                            A educação é tida hoje em dia como um factor imprescindível para o desenvolvimento sustentável de uma nação na medida em que é ela atribuída a responsabilidade de capacitar indivíduos, aumentando assim as suas habilidades e competências e o consequente nível de rendimento a estes associados.A Comunidade Académica para o Desenvolvimento (CADE), organiza desde 2015, conferências anuais de Educação, não só para criar plataformas de debate inclusivas...
                        </p>
                        <a href="#" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">mais<i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                   <a href="live.html">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="img/live/live.png" alt="">
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
                        <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <h6>Horario</h6>
                            <h4>Educação Digitalizada em Moçambique: Desafios e Perspectivas (Primeiro Dia).</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-9">
                        <div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <div id="clock"></div> <!-- active.js -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us And Countdown Area End -->
<!-- Our Schedule Area Start -->
<section class="our-schedule-area bg-white section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Segunda <br> <span>26 de Outubro, 2020</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Terça <br> <span>27 de Outubro, 2020</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">Quarta <br> <span>28 de Outubro, 2020</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#step-four" role="tab" aria-controls="step-four" aria-expanded="true">Quinta <br> <span>29 de Outubro, 2020</span></a>
                            </li>
                             <!-- Nav Item -->
                             <li class="nav-item">
                                <a class="nav-link" id="friday-tab" data-toggle="tab" href="#step-five" role="tab" aria-controls="step-five" aria-expanded="true">Sexta <br> <span>30 de Outubro, 2020</span></a>
                            </li>
                             <!-- Nav Item -->
                             <li class="nav-item">
                                <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#step-six" role="tab" aria-controls="step-six" aria-expanded="true">Sábado <br> <span>31 de Outubro, 2020</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="sunday-tab" data-toggle="tab" href="#step-seven" role="tab" aria-controls="step-seven" aria-expanded="true">Domingo <br> <span>01 de Novembro, 2020</span></a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content SEGUNDA-->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                <h6>Discurso de Abertura</h6>
                                                    <p>por <span>Presidente da CADE</span></p>
                                                    <p>e <span>Ministro de
                                                            Ciência e
                                                            tecnologia,
                                                            ensino superior
                                                            técnico
                                                            profissional
                                                        </span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                            <p><i class="zmdi zmdi-time"></i> Início do Evento</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">Ver Mais <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                <h6>Live <i>“Educação
                                                            digitalizada em
                                                            Moçambique: desafios
                                                            e perspectivas”</i>
                                                    </h6>
                                                    <p>Oradores <span>MINEDH</span></p>
                                                    <p><span>MCTESTP</span></p>
                                                    <p><span>MEPT</span></p>
                                                    <p><span>Universidade do
                                                            Porto
                                                        </span></p>
                                                    <p>Moderador <span>UP</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                            <p><i class="zmdi zmdi-time"></i>10:00h - 12:00h </p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">Participar <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                <h6>Palestra
                                                        <i>"Orientação vocacional
                                                        e Profissional"</i>
                                                        </h6>
                                                    <p>Palestrante <span>Isaías
                                                        Bezana
                                                        </span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 14:00 - 16:00h</p>
                                              
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">Assistir <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                       
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--TAB TERÇA-->
                        <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                <h6>Live <i>“Impacto de pandemia
                                                            COVID-19 no sistema
                                                            nacional de educação:
                                                            Lições e Perspectivas”</i>
                                                    </h6>
                                                    <p>Oradores <span>MINEDH</span></p>
                                                    <p><span>CMCM</span></p>
                                                    <p><span>INSS</span></p>
                                                    <p><span>CISM
                                                        </span></p>
                                                    <p>Moderador <span>ISCISA</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                            <p><i class="zmdi zmdi-time"></i> 10:00 - 12:00h</p>
                                               
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">Participar <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                        <!-- Single Schedule Area -->

                              
                                </div>
                            </div>
                        </div>
    </div>
                         <!--TAB QUARTA-->
                        <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="wednesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                <h6>Live <i>“Pedagogia e
                                                            Tecnologia: Da
                                                            evolução a
                                                            projecção de uma
                                                            pedagogia digital
                                                            em Moçambique
                                                            ”</i>
                                                    </h6>
                                                    <p>Oradores <span>MCTESTP</span></p>
                                                    <p><span>ISCED</span></p>
                                                    <p><span>UP</span></p>
                                                    <p><span>ISUTC</span></p>
                                                    <p><span>Universidade de
                                                            Caixas do sul,
                                                            Brasil
                                                            </span></p>
                                                    <p>Moderador <span>Eder Mario</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 10:00 - 12:00h</p>
                                                
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">Participar <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                <h6>Webinar
                                                        <i>"Gestão escolar:
                                                            uma visão sobre
                                                            os desafios na era
                                                            digital
                                                            "</i>
                                                        </h6>
                                                    <p>Oradores <span>António Cipriano
                                                        </span></p>
                                                        <p>e <span>José Uqueio
                                                        </span></p>
                                                        <p>Moderador <span>Ergimino Mucale</span></p>
                                                        
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 14:00 - 16:00h</p>
                                               
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="#" class="btn confer-btn">Assistir <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>

                           
                                
                                </div>
                            </div>
                        </div>
                               <!--TAB QUINTA-->
                        <div class="tab-pane fade" id="step-four" role="tabpanel" aria-labelledby="thursday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                <h6>Live <i>“Educação online e a
                                                            educação a distância
                                                            em Moçambique:
                                                            Estágios e
                                                            expectativas”</i>
                                                    </h6>
                                                    <p>Oradores <span>ISCED</span></p>
                                                    <p><span>UP</span></p>
                                                    <p><span>Universidade Politécnica</span></p>
                                                    <p><span>ISM</span></p>
                                                    <p><span>Universidade de Lisboa
                                                            </span></p>
                                                    <p>Moderador <span>UEM</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 10:00 - 12:00h</p>
                                               
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="evento.html#conferencias" class="btn confer-btn">Participar <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                     
                                    </div>

                                    <!-- More Schedule Btn -->
                                 
                                </div>
                            </div>
                        </div>
                                  <!--TAB SEXTA-->
                                  <div class="tab-pane fade" id="step-five" role="tabpanel" aria-labelledby="friday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                <h6>Live <i>“Conexão Global do
                                                            Sistema nacional de
                                                            educação.
                                                            ”</i>
                                                    </h6>
                                                    <p>Oradores <span>CADE</span></p>
                                                    <p><span>MINEDH</span></p>
                                                    <p><span>MCTESTP</span></p>
                                                    <p><span>UEM</span></p>
                                                    <p><span>CESC                                                            </span></p>
                                                    <p>Moderador <span>CADE</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 10:00 - 12:00h</p>
                                               
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="evento.html#conferencias" class="btn confer-btn">Participar <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                <h6>Palestra
                                                        <i>"Liderança e
                                                            empreendedorismo
                                                            "</i>
                                                        </h6>
                                                    <p>Palestrante <span>Arcélio Tivane
                                                        </span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 14:00 - 16:00h</p>
                                          
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="evento.html#webinares" class="btn confer-btn">Assistir <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                                  <!--TAB SÁBADO-->
                                  <div class="tab-pane fade" id="step-six" role="tabpanel" aria-labelledby="saturday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                <h6>Webinar
                                                        <i>"Alfabetização digital e
                                                            o acesso à internet
                                                            como um direito humano: dos planos a
                                                            perspectivas pragmáticas no
                                                            contexto moçambicano
                                                            "</i>
                                                        </h6>
                                                    <p>Oradores <span>Régio Conrado
                                                        </span>
                                                    </p>
                                                        <p><span>Dércio Tsandzana
                                                        </span></p>
                                                        <p>e<span>Uriel Menete
                                                        </span></p>
                                                    <p>Moderador
                                                        <span>CADE</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 10:00 - 12:00h</p>
                                            
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="evento.html#webinares" class="btn confer-btn">Assistir <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                     
                                    </div>

                                
                                </div>
                            </div>
                        </div>
                                  <!--TAB DOMINGO-->
                                  <div class="tab-pane fade" id="step-seven" role="tabpanel" aria-labelledby="sunday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                <h6>Discurso de Encerramento</h6>
                                                    <p>por <span>Presidente da CADE</span></p>
                                                    <p>e <span>Ministra da
                                                                    Educação e
                                                                    desenvolvimento
                                                                    Humano
                                                        </span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12:00 - 14:00h</p>
                                               
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="evento.html#encerramento" class="btn confer-btn">Ver Mais <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/educa/logo.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Momento Cultural <i>Espetáculos</i></h6>
                                                    
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 14:00 - 16:00h</p>
                                                
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="actividades-culturais.html#espetaculos" class="btn confer-btn">Assistir <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>

                              
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Schedule Area End -->

    <!-- Our Speakings Area Start -->
    <section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(img/bg-img/backgroundeducaonline1.jpg);" id="speakers">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>EXPOSIÇÕES</p>
                        <h4 class="text-uppercase"> EXPOSITORES DA FEIRA</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Speaker Area -->
                <?php
                include_once('includes/dbconfig.php');
                $ref = 'institution/';
                $fetchdata = $database->getReference($ref)->getValue();
                $count = 0;
                ?>

                <?php
                foreach( $fetchdata as $key => $row):
                    $count++;
                    if ($count == 4){
                        break;
                    }
                ?>

                <div class="col-12 col-md-6 col-lg-4">
                    <a href="institute.php?id=<?php echo $row['uid']; ?>">
                        <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Thumb -->
                            <div class="speaker-single-thumb">
                                <img src="<?php echo $row['img1']; ?>" alt="" style="height:350px ; width: 100%; background:white;">
                            </div>


                            <div class="speaker-info">
                                <h5><?php echo $row['institution_name']; ?></h5>

                            </div>

                        </div>
                    </a>
                </div>


                <?php
                endforeach;
                ?>


                <div class="col-12">
                    <div class="more-speaker-btn text-center mt-20 mb-40 wow fadeInUp" data-wow-delay="300ms">
                        <a class="btn confer-btn-white" href="feira.php">ver todos expositores <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>




    <!-- Our Speakings Area End -->

    <!-- Our Schedule Area Start -->





    <!-- Our Ticket Pricing Table Area Start -->
                                     
    <section id="tickets" class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax" style="background-image: url(img/bg-img/backgroundeducaonline1.jpg);">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Videos</p>
                        <h4>FEIRA INTERNACIONAL DE EDUCAÇÃO 2020</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Video</h6>
                        <!-- Ticket Icon -->
                     
                        <!-- Ticket Pricing Table Details -->
                      
                            <iframe width="100%" height="200px" src="https://www.youtube.com/embed/X9zS9D7YcI0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Video</h6>
                        <iframe width="100%" height="200px" src="https://www.youtube.com/embed/X9zS9D7YcI0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Video</h6>
                        <!-- Ticket Icon -->
                        <iframe width="100%" height="200px" src="https://www.youtube.com/embed/X9zS9D7YcI0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area End -->

    <!-- Our Sponsor And Client Area Start -->
    <section class="our-sponsor-client-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 sponsor-h4 text-center wow fadeInUp" data-wow-delay="300ms">
                        <!-- <p>Partners &amp; Sponsors</p> -->
                        <h4>ORGANIZAÇÃO</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Our Sponsor area -->
                    <div class="our-sponsor-area d-flex flex-wrap">
                        <!-- Single Sponsor -->
                        <div class="single-sponso wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/NewCADELogoSlogan.png" alt=""></a>
                        </div>
                      
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="section-heading-2 sponsor-h4 text-center wow fadeInUp" data-wow-delay="300ms">
                        <!-- <p>Partners &amp; Sponsors</p> -->
                        <h4>PRODUÇÃO</h4>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Our Sponsor area -->
                    <div class="our-sponsor-area d-flex  flex-wrap" style="text-align:center;">
                        <!-- Single Sponsor -->
                        <div class="single-sponso wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/ONEMEDIA.png" alt=""></a>
                        </div>
                       
                    </div>
                </div>
                <div class="col-12">
                    <div class="section-heading-2 sponsor-h4 text-center wow fadeInUp" data-wow-delay="300ms">
                        <!-- <p>Partners &amp; Sponsors</p> -->
                        <h4>PARCEIROS</h4>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Our Sponsor area -->
                    <div class="our-sponsor-area d-flex flex-wrap">
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/logonew01.png" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/UP.png" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/UEMLOGO.png" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/GPDNET.png" alt=""></a>
                        </div>
                       
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/sosLogo.png" alt=""></a>
                        </div>
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/logos/cepaepsimbolo.png" alt=""></a>
                        </div>
                    </div>
                </div>
              
                                <!-- Single client Icon -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Heading -->
               
            </div>
            
        </div>
    </section>
    <!-- Our Sponsor And Client Area End -->

<!-- Our Blog Area Start -->
   
    <!-- Our Blog Area End -->

    <!-- Contact Area Start -->
    <section id="contact" class="contact-our-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <!-- <p>Have Question?</p> -->
                        <h4>CONTACTOS</h4>
                    </div>
                </div>
           </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>LOCALIZAÇÃO:</p>
                            <h6>Av. Albert Lithuli, nr 300, R/c Cidade de Maputo</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Contacto:</p>
                            <h6>+258 21 320 959</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Email:</p>
                            <h6>comercial@educa.co.mz</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Website:</p>
                            <h6>www.educa.co.mz</h6>
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
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Seu nome">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name2" placeholder="Sobre nome">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Seu numero">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Sua mensagem *"></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Enviar messagem <i class="zmdi zmdi-long-arrow-right"></i></button>
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

    <!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
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
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="fa fa-heart-o" aria-hidden="true"></i> EDUCA MOÇAMBIQUE</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="col-12 col-md-6">
                        <div class="footer-menu">
                            <ul class="nav">
                                <!-- <li><a href="#"><i class="zmdi zmdi-circle"></i> Terms of Service</a></li> -->
                                <!-- <li><a href="#"><i class="zmdi zmdi-circle"></i> Privacy Policy</a></li> -->
                            </ul>
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
    <script src="js/myscript.js">

</script>

    
  <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
  <script src="js/db/app.js"></script>
  <script src="js/db/real-time-database.js"></script>

  <script>
    firebase.auth().onAuthStateChanged(function(user) {

    if (user) {

        firebase.database().ref('users').on('value', function(snapshot){
            snapshot.forEach(function (item) {

                if(item.val().userId !== null && user.uid !== null){
                    var db_uid = item.val().userId.toString().trim();
                    var user_uid = user.uid.toString().trim();

                    if(db_uid == user_uid){
                        var user_name = document.getElementById("user-name");
                        user_name.innerHTML= item.val().name;
                        return;
                    }

                }

            });
        });

    } else {
        location.href='intro.php';
    }

  });
  </script>


</body>

</html>
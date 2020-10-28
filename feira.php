<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Educa - Feira</title>

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

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.html"><img src="./img/educa/logo.png" alt=""></a>

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
                                <a href="perfil/profile.html" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Perfil<i class="zmdi zmdi-sign-in"></i></a>
                            </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/educa/backgroundeducaonline.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Feira</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Feira</li>
                            </ol>
                        </nav>
                    </div>
                    

                   
                    <div class="call-to-action-content text-center" style="margin-down:0px;">
                        <div class="call-to-action-heading">
                            <h6 style="font-size:10;">É estudante e quer saber qual é a sua vocação? Faça o Teste de Orientacão Vocacional </h6>
                        
                        </div>
                        <a href="teste-vocacional/index.html" target="_blank" class="btn confer-btn-white-2 mt-40" onclick="">Iniciar o Teste <i
                                class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                    
             
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->


    <!-- Our Blog Area Start -->
    <section id="blog" class="our-blog-area bg-img section-padding-100-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>EXPOSIÇÕES DA FEIRA</p>
                        <h4>EXPOSITORES</h4>
                    </div>
                </div>

                <!-- Single Blog Area -->


                <?php
                include_once('includes/dbconfig.php');
                $ref = 'institution/';
                $fetchdata = $database->getReference($ref)->getValue();

                ?>

                <?php
                foreach( $fetchdata as $key => $row):
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

            </div>
        </div>
    </section>
    <!-- Our Blog Area End -->



    <!-- Call to Action Area Start -->
    <section class="call-to-action-area bg-img bg-gradient-overlay jarallax section-padding-100"
        style="background-image: url(img/bg-img/14.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content text-center">
                        <div class="call-to-action-heading">
                            <h6>Contacto com o Psicológico</h6>
                            <h2>SOS Psique on-line
                            </h2>
                        </div>
                        <!-- <div class="event-time">
                            <p><i class="zmdi zmdi-alarm-check"></i> 2-14 Jan 2019</p>
                            <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                        </div> -->
                    </div>

                    <div class="ticket-btn text-center">
                        <a href="http://localhost:49466/#/" class="btn confer-btn-white-2 mt-40">Iniciar o contacto <i
                                class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Area End -->
    <!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
        <!-- Main Footer Area -->
       

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://educa.co.mz" target="_blank">Educa</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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

</body>

</html>
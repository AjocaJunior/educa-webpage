<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Facebook share button -->
    <!-- You can use Open Graph tags to customize link previews.
Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"
        content="file:///C:/Users/ONEMEDIA2/Workstation/One%20Media/educa-webpage/informa%C3%A7%C3%B5es%20diversas.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Educa - Feira" />
    <meta property="og:description" content="Feira Educa 2020" />
    <meta property="og:image" content="C:\Users\ONEMEDIA2\Workstation\One Media\educa-webpage\img\educa\logo.png" />
    <!-- Fim do share button -->

    <!-- Title -->
    <title>Educa - Informações Diversas </title>

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
                                <li><a href="actividades-culturais.php">Cultura</a>
                                    <ul class="dropdown">
                                    <li><a href="actividades-culturais.php#novidade">Novidades</a></li>
                                        <li><a href="actividades-culturais.php#pontos">Turismo</a></li>
                                        <li><a href="actividades-culturais.php#jogos">Jogos</a></li>
                                        <li><a href="raffle.php">Sorteio</a></li>
                                    </ul>
                                </li>
                                <li><a href="informacoes-diversas.php">Informações</a>
                                    <ul class="dropdown">
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a href="#calendario">Calendário</a></li>
                                        <li><a href="#bolsas">Bolsas</a></li>
                                    </ul>
                                </li>
                                <li><a href="index.php#contact">Contacto</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="perfil/profile.php" class="btn confer-btn-white mt-3 mt-lg-0 ml-3 ml-lg-5"
                                id="user-name">Perfil<i class="zmdi zmdi-sign-in"></i></a>
                        </div>
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
                        <h2 class="page-title">Informações Diversas</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Informações Diversas</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Breadcrumb Area End -->

    <!-- Our Schedule Area Start -->

    <!-- Breadcrumb Area End -->
    <section class="our-speaker-area section-padding-150-20 jarallax ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Informe-te sobre a Feira</p>
                        <h4 style="color: #414c52;" id="blog">BLOG DE EXPOSITORES</h4>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Blog Area Start -->
    <div class="our-blog-area h-100">
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
                            <img src="<?php echo $row['img'] ?>" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <h6>
                                <a href="single-blog.php?id=<?php echo $row['uid'] ?>"
                                    target="_blank"><?php echo $row['title'] ?></a>
                                <h6>

                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a class="post-date" href="#"><i
                                                class="zmdi zmdi-alarm-check"></i><?php echo $row['date'] ?></a>
                                        <a class="post-author" href="#"><i
                                                class="zmdi zmdi-account"></i><?php echo $row['author'] ?></a>
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
                            <a href="single-blog.php?id=<?php echo $row['uid'] ?>" target="_blank"><i
                                    class="zmdi zmdi-long-arrow-right"></i></a>
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
    <section class="our-schedule-area bg-white section-padding-50 mb-30 bg-design">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p id="calendario">Calendários Académicos</p>
                        <h4 style="color:#414c52;">Calendários</h4>
                    </div>
                    <?php

include_once('includes/dbconfig.php');
$ref = 'calendarioacademico';
$fetchdata = $database->getReference($ref)->getValue();


// $uid  = $_GET['id'];


?>
                    <div id="accordion">
                        <div class="card">
                            <?php
                                                   
                                                   if($fetchdata != null):
                                                   foreach( $fetchdata as $key => $row):  
                                                        
                                                         
                                       
                                                       ?>
                            <div class="card-header text-center" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                        style="color:#414c52">
                                        <?php echo $row['descricao'] ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <h6>Baixe e Parilhe o Calendário Académico do <?php echo $row['descricao'] ?></h6>
                                    <iframe width="100%" height="500px" src="<?php echo $row['url'] ?>"></iframe>
                                    <!-- Schedule Btn -->
                                    <a href="http://www.facebook.com/sharer.php?u=https://www.educa.co.mz"
                                        target="_blank" class="btn confer-btn-white">Partilhar <i
                                            class="fa fa-facebook-f"></i></a>
                                    <a href=" <?php echo $row['url'] ?>" download class="btn confer-btn-white">Baixar <i
                                            class="fa fa-download"></i></a>
                                </div>


                            </div>

                            <?php
// }
                                                        
                    endforeach;
                endif;
?>
                        </div>
                    </div>


                </div>
            </div>


        </div>


    </section>
    <!-- Our Schedule Area End -->




    <!--SECÇÃO DIVERSOS-->


    <section class="our-schedule-area section-padding-100" style="background: #e9eef4;">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="section-padding-50">
                        <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                            <p id="bolsas">INFORME-TE SOBRE BOLSAS DE ESTUDO</p>
                            <h4>BOLSAS DE ESTUDO</h4>
                            <div class="schedule-tab mt-3">
                                <!-- Nav Tabs -->
                                <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="interna" data-toggle="tab" href="#passo-um"
                                            role="tab" aria-controls="passo-um" aria-expanded="true">Internas</a>
                                    </li>
                                    <!-- Nav Item -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="externa" data-toggle="tab" href="#passo-dois" role="tab"
                                            aria-controls="passo-dois" aria-expanded="true">Externas</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php

include_once('includes/dbconfig.php');
$ref = 'bolsadeestudo';
$fetchdata = $database->getReference($ref)->getValue();
$Interna = 'Interna';
$Externa = 'Externa';

// $uid  = $_GET['id'];


?>
                <div class="col-12">
                    <div class="section-padding-50">
                        <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">


                            <div class="tab-content" id="conferScheduleTabContent">
                                <div class="tab-pane fade show active" id="passo-um" role="tabpanel"
                                    aria-labelledby="interna">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="col-12">

                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">DESCRIÇÃO</th>
                                                            <th scope="col">INSTITUIÇÃO</th>
                                                            <th scope="col">DATA LIMITE</th>
                                                            <th scope="col">EDITAL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                   
                                                if($fetchdata != null):
                                                foreach( $fetchdata as $key => $row):  
                                                        $categoria=  $row['category'];
                                                        if($categoria==$Interna){
                                    
                                                    ?>
                                                        <tr>




                                                            <td class="align-middle" style="text-align: center;">
                                                                <?php echo $row['descricao'] ?></td>
                                                            <td><?php echo $row['instituicao'] ?></td>
                                                            <td><?php echo $row['date'] ?></td>
                                                            <td>
                                                                <a class="btn confer-btn-white"
                                                                    href="<?php echo $row['url'] ?>" download><i
                                                                        class="fa fa-download"></i></a>
                                                            </td>
                                                            <?php
// }
                                                        }
                    endforeach;
                endif;
?>
                                                        </tr>

                                                    </tbody>
                                                </table>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="passo-dois" role="tabpanel" aria-labelledby="externa">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">DESCRIÇÃO</th>
                                                            <th scope="col">PAÍS</th>
                                                            <th scope="col">INSTITUIÇÃO</th>
                                                            <th scope="col">DATA LIMITE</th>
                                                            <th scope="col">EDITAL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                   
                                                   if($fetchdata != null):
                                                   foreach( $fetchdata as $key => $row):  
                                                           $categoria=  $row['category'];
                                                           if($categoria==$Externa){
                                       
                                                       ?>
                                                        <tr>
                                                            <td class="align-middle" style="text-align: center;">
                                                                <?php echo $row['descricao'] ?></td>
                                                            <td> <?php echo $row['pais'] ?></td>
                                                            <td> <?php echo $row['instituicao'] ?></td>
                                                            <td> <?php echo $row['date'] ?></td>
                                                            <td>
                                                                <a class="btn confer-btn-white"
                                                                    href=" <?php echo $row['url'] ?>" download><i
                                                                        class="fa fa-download"></i> </a>
                                                            </td>
                                                        </tr>

                                                        <?php
// }
                                                        }
                    endforeach;
                endif;
?>





                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-100-0" style="background-color: #414c52;">


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
                                </script> <i class="fa fa-heart-o" aria-hidden="true"></i> EDUCA MOÇAMBIQUE</a>
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

    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="js/db/app.js"></script>
    <script src="js/db/real-time-database.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
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

    <style>
    .filla {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden
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

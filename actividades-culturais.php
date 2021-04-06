<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Educa - Actividades Culturais</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/educa/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <?php
  include_once('includes/dbconfig.php');         
  $ref = 'novidades/';
  $fetchdata = $database->getReference($ref)->getValue();

  $reff = 'jogoquiz/';
   $fetchdataa = $database->getReference($reff)->getValue();

   $refff = 'pontoturistico/';
   $fetchdataaa = $database->getReference($refff)->getValue();

?>


    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off" style="background:#414c52">
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



    <!-- Our Ticket Pricing Table Area Start -->

    <section id="tickets" class="our-ticket-pricing-table-area bg-design section-padding-150 jarallax">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p id="novidade">SELECCIONAMOS AS MELHORES NOVIDADES PARA O JOVEM MOÇAMBICANO</p>
                        <h5 style="color: #414c52;">NOVIDADES</h5>
                    </div>
                </div>
            </div>



            <div class="row">
                <?php
       if($fetchdata != null):?>
                <?php foreach( $fetchdata as $key => $row):

                ?>
                <div class="col-12 col-md-4">
                    <div class="single-we-offer-content bg-boxshadow text-center wow fadeInUp" data-wow-delay="300ms">
                        <a href="novidade.php?id=<?php echo $row['uid'] ?>" target="_blank">
                        <?php
                            $pharagraph = "";

                            if(strlen($row['descricao']) > 14) {
                                $pharagraph = substr($row['descricao'], 0, 90)."..";
                            } else {
                                $pharagraph = $row['descricao'];
                            }

                            ?>

                        <h6><?php echo $row["title"]; ?>
                            <h6>
                                <img src="<?php echo $row["img"]; ?>">
                                <p class=""><?php echo $pharagraph; ?></p>

                        </a>
                    </div>
                </div>
                <?php endforeach;?>
                <?php endif; ?>




            </div>
        </div>
    </section>


    <section class="our-speaker-area section-padding-80">
        <div class=" container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms"
                        style="margin-bottom: 10px;">

                        <h5 id="pontos" style="color:#414c52;">PONTOS TURÍSTICOS</h5>
                        <!-- <p class="mt-30">Categoria</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
              if($fetchdataaa != null):?>
                <?php foreach( $fetchdataaa as $key => $row):
             ?>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-3 bg-boxshadow">
                    <a href="ponto-turistico.php?id=<?php echo $row["uid"]; ?>"  target="_blank" >

                        <div class="text-center">
                            <div class="single-speaker-area wow fadeInUp" data-wow-delay="300ms">
                                <!-- Thumb -->
                                <div class="speaker-single-thumb fill">
                                    <img src="<?php echo $row["img1"]; ?>" alt="">
                                </div>
                                <!-- Social Info -->


                            </div>
                            <div class="speaker-info">
                                <h6><?php echo $row["ponto_name"]; ?></h6>

                            </div>

                        </div>
                    </a>

                </div>

                <?php endforeach;?>
                <?php endif; ?>


            </div>
        </div>
    </section>




    <!-- Our Ticket Pricing Table Area Start -->

    <section id="tickets" class="our-ticket-pricing-table-area section-padding-100-0 jarallax"
        style="background-color: #e9eef4;">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p id="jogos">Jogos de Cultura Geral</p>
                        <h5 style="color: #414c52;">TESTE SEUS CONHECIMENTOS SE DIVERTINDO</h5>
                    </div>
                </div>
            </div>
            <!-- <a data-toggle="collapse" data-target="#demo">Collapsible</a>
            <div class="col-12 collapse" id="demo"><div>COLLAPSE 1</div></div> -->
            <div class="row">
                <!-- Single Ticket Pricing Table -->
                <?php
       if($fetchdataa != null):?>
                <?php foreach( $fetchdataa as $key => $row):

?>
                <div class="col-12 col-md-4">
                    <div class="single-ticket-pricing-table bg-boxshadow text-center mb-100 wow fadeInUp"
                        data-wow-delay="300ms">
                        <h6 class="ticket-plan-jogo"><?php echo $row["name"]; ?></h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="<?php echo $row["img"]; ?>" alt="">
                        </div>
                        <a href="<?php echo $row["link"]; ?>" target="_blank" class="btn confer-btn-white w-100 mb-30"
                            style="border-radius: 0px;">Jogar <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
                <?php endforeach; endif; ?>

            </div>
        </div>
    </section>


    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-100-0" style="background-color: #414c52;">
        <!-- Main Footer Area -->


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
    <script src="/cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <!-- <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script> -->
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-firestore.js"></script>

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
            position: 'top-end',
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
</body>

<style>
.fill {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.fill a img {
    flex-shrink: 0;
    min-width: 100%;
    min-height: 100%;
    width: 90%;
    height: 200px;
    object-fit: cover;
}

.fill img {
    flex-shrink: 0;
    min-width: 100%;
    min-height: 100%;
    width: 90%;
    height: 250px;
    object-fit: cover;
}

</style>

</html>

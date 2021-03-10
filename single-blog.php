<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Publicação - Educa </title>

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
    $uid  = $_GET['id'];
   $author = "";
    $title           = "";
  $img= "";
  $text="";
    $category = "";
$data = "";
   

    foreach($fetchdata as $key => $row){
        if($row['uid'] == $uid ){
         
          $title           = $row['title'];
         
          $author = $row['author'];
                  $category                  = $row['category'];
          $img                = $row['img'];
         
       
          $text              = $row['text'];
         $data = $row['date'];

          break;
        }
    }

    // $public = $_GET['public'];
    // $ref = 'institution/'.$uid.'/publication';
    // $fetchdata = $database->getReference($ref)->getValue(); 

    // foreach($fetchdata as $key => $row){
    //     if($row['uid'] == $public ){
    //         $category = $row['category'];
    //         $date  = $row['date'];
    //         $img = $row['img'];
    //         $text = $row['text'];
    //         $titlePublic = $row['title'] ;
    //         $author = $row['author'];
    //     }

    // }

    ?>



    <!-- Header Area Start -->
    <header class="header-area" style="background-color: #414c52;">
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
                                <li><a href="<?php echo "institute.php?id=".$uid."#about" ?>">Sobre</a></li>

                                <li><a href="<?php echo "institute.php?id=".$uid."#contact" ?>">Contacto</a></li>
                            </ul>
                            <!-- ?php echo $uid; ?-->
                            <!-- Get Tickets Button -->

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->


    <section class="our-speaker-area section-padding-150 jarallax ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" 
                        data-wow-delay="300ms">
                        
                        <h4 style="color: #414c52;"><?php echo $title ?></h4>
                        <p><?php echo $category ?></p>
                    </div>
                </div>

               

            </div>
        </div>
    </section>

    <!-- Blog Area Start -->
    <section class="confer-blog-details-area section-padding-20">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Post Details Area -->
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="pr-lg-4 mb-100">
                        <!-- Post Content -->
                        <div class="post-details-content">

                            <!-- Post Thumbnail -->
                            <div class="post-blog-thumbnail mb-30">
                                <img src="<?php  echo $img;?> " alt=" " >
                            </div>

                            <!-- Post Title -->
                            <h4 class="post-title "><?php echo $title; ?></h4>

                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> <?php echo $data; ?>
                                </a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> <?php echo $author; ?>
                                </a>
                                <!-- <a class="post-author" href="#"><i class="zmdi zmdi-favorite-outline"></i> 8 Likes</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-comment-outline"></i> 12 Comments</a> -->
                            </div>


                            <p style="white-space: pre-line"><?php echo $text; ?></p>

                        </div>


                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="confer-sidebar-area mb-100 ">

                        <!-- Single Widget Area -->
                        <div class="single-widget-area ">
                            <h5 class="widget-title mb-30 ">Publicações recentes</h5>

                            <?php 
                        $ref = '/publication';
                        $fetchdata = $database->getReference($ref)->getValue(); 
                    ?>

                            <?php if($fetchdata != null):?>
                            <?php foreach( $fetchdata as $key => $row):   ?>

                            <!-- Single Recent Post Area -->
                            <div class="single-recent-post-area d-flex align-items-center">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.php?id=<?php echo $row['uid'] ?>"><img
                                            src="<?php echo $row['img']; ?>" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">

                                    <?php  
                                $currentTitle = "";
                                 if(strlen($row['title']) > 30) {
                                     $currentTitle = substr( $row['title'] , 0 , 30)."..";
                                 } else {
                                     $currentTitle = $row['title'];
                                 }
                            
                            ?>
                                    <a href="single-blog.php?id=<?php echo $row['uid'] ?>"
                                        class="post-title"> <?php echo $currentTitle; ?> </a>
                                        <p><?php echo $row['category']; ?></p>
                                    <a href="#" class="post-date"><i class="zmdi zmdi-time"></i>
                                        <?php echo $row['date']; ?> </a>
                                </div>
                            </div>

                            <?php endforeach ?>
                            <?php endif?>


                        </div>

                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- Blog Area End -->

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
                                            Copyright &copy;
                                            <script>
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
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js "></script>
    <!-- Popper -->
    <script src="js/popper.min.js "></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js "></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js "></script>
    <!-- Active -->
    <script src="js/default-assets/active.js "></script>

</body>

</html>

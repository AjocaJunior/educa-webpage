<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Novidades - Educa </title>

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
    $ref = 'novidades/';
    $fetchdata = $database->getReference($ref)->getValue();
    $uid  = $_GET['id'];
   $author = "";
    $title           = "";
  $img= "";
  $text="";
    $category = "";
$data = "";
$fonte = "";
   $video_link = "";

    foreach($fetchdata as $key => $row){
        if($row['uid'] == $uid ){
         
          $title           = $row['title'];
         
          $author = $row['author'];
                  $category                  = $row['category'];
          $img                = $row['img'];
                
          $text              = $row['descricao'];
         $data = $row['date'];
         $fonte = $row['fonte'];
$video_link = $row['video_link'];

if($video_link == null || $video_link == ""){
    $video_link = "";
}
  break;

         if($img == null || $img == ""){
            $img = "SEM NOVIDADE";
        }
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
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">

                        <h5 style="color: #414c52;"><?php echo $title ?></h5>
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

                                <img src="<?php  echo $img;?> " alt=" ">
                            </div>

                            <!-- Post Title -->
                            <h4 class="post-title "><?php echo $title; ?></h4>

                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> <?php echo $data; ?>
                                </a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> <?php echo $author; ?>
                                </a>
                                <a class="post-author" href="<?php echo $fonte; ?>" target="_blank"><i
                                        class="zmdi zmdi-account"></i>Fonte: <?php echo $fonte; ?>
                                </a>
                                <!-- <a class="post-author" href="#"><i class="zmdi zmdi-favorite-outline"></i> 8 Likes</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-comment-outline"></i> 12 Comments</a> -->
                            </div>


                            <p style="white-space: pre-line"><?php echo $text; ?></p>
<?php if($video_link!=null){?>
                            <div class="post-blog-thumbnail mb-30">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" allowfullscreen width="640" height="480"
                                        src="<?php  echo $video_link;?>/autoplay=1"> </iframe>
                                </div>
                            </div>
<?php }?>
                        </div>


                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="confer-sidebar-area mb-50 ">

                        <!-- Single Widget Area -->
                        <div class="single-widget-area ">
                            <h5 class="widget-title mb-30 ">Novidades Recentes</h5>

                            <?php 
                        $ref = 'novidades/';
                        $fetchdata = $database->getReference($ref)->getValue(); 
                          ?>

                            <?php if($fetchdata != null):?>
                            <?php foreach( $fetchdata as $key => $row):   ?>

                            <!-- Single Recent Post Area -->
                            <div class="single-recent-post-area d-flex align-items-center">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="novidade.php?id=<?php echo $row['uid'] ?>"><img
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
                                    <a href="single-blog.php?id=<?php echo $row['uid'] ?>" class="post-title">
                                        <?php echo $currentTitle; ?> </a>
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

                <div class="col-12">

                    <div class="confer-leave-a-reply-form clearfix section-padding-20" id="contact">
                        <h4 class="mb-30">Deixa seu Comentário</h4>

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
                                                <input type="email" class="form-control mb-30" name="email" id="email"
                                                    placeholder="E-mail" required>
                                            </div>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control mb-30" id="mensagem"
                                                    cols="30" rows="6" placeholder="Comentário" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->

                                    </div>
                                </div>
                            </form>

                            <div class="col-12">
                                <button onclick="addComentario();" class="btn confer-btn-white mt-50 wow fadeInUp"
                                    style="background:#f8871f;border-radius:0px">Enviar Comentário <i
                                        class="zmdi zmdi-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="confer-leave-a-reply-form section-padding-20 clearfix" id="comments">
                        <h5 class="mb-30">Comentários</h5>

                        <?php 
                            $ref = 'novidades/'.$uid.'/comentario';
                            $fetchdata = $database->getReference($ref)->getValue(); 
                          ?>
                        <?php if($fetchdata != null):?>
                        <?php foreach( $fetchdata as $key => $row):   ?>
                        <div class="single-recent-post-area d-flex align-items-center">
                            <!-- Thumb -->
                            <!-- <div class="post-thumb">
                                    <a href="#"><img
                                            src="./img/educa/user.png" alt=""></a>
                                </div> -->
                            <!-- Content -->


                            <div class="post-content">
                                <a class="" href="#"><?php echo $row['name']; ?></a>
                                <p class=""> <?php echo  $row['mensagem']; ?> </p>
                                <p class="post-date"><?php echo $row['date']; ?></p>


                            </div>


                        </div>
                        <?php endforeach ?>
                        <?php endif?>
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
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js "></script>
    <script src="js/db/app.js "></script>
    <script src="js/db/real-time-database.js "></script>
    <script>
    function addComentario() {
        var name = document.getElementById('name').value;
        var email = document.getElementById("email").value;
        var mensagem = document.getElementById('mensagem').value;
        var date = new Date().toLocaleDateString();
        var uid = "<?php echo $_GET['id'] ; ?>";
        var uidComentario = uuidv4();
        addComment(name, email, mensagem, date, uid);

    }

    function addComment(name, email, mensagem, date, uid) {
        var uidComentario = uuidv4();
        var data = {
            name: name,
            date: date,
            email: email,
            mensagem: mensagem,
            uid: uidComentario

        }


        // firebase.database().ref().child('institution').child(uidInstitute).child("publication").child(uid).child("comentario").child(uidComentario).set(data,
        //     function(error) {
        //         if (error) {
        //             alert("Data could not be saved. " + error);
        //         } else {
        //             window.location.replace("expositor_admin.php?id=" + uid);
        //         }
        //     });

        firebase.database().ref().child('novidades').child(uid).child("comentario").child(uidComentario).set(data,
            function(error) {
                if (error) {
                    alert("Data could not be saved. " + error);
                } else {
                    console.log("saved");
                    window.location.reload(true);
                }
            });

    }



    function uuidv4() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random() * 16 | 0,
                v = c == 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    }
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Seja Bem-Vinda ao educa</title>

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
    
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/37.jpg); height: 100px;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Area Start -->
    <section class="contact--us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Contact Us Thumb -->
                <div class="col-12 col-lg-6">
                    <div class="contact-us-thumb mb-100">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" allow="autoplay" src="https://www.youtube.com/embed/v64KOxKVLVg?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" allowfullscreen></iframe>
                          </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div class="contact-heading">
                            <h4>Seja Bem-Vinda ao educa</h4>
                            <p>Ao se inscrever na educa, você pode participar de vários programas. Cada programa tem uma exigência diferente.</p>
                        </div>
                        <div class="contact_form">
                            <form action="process.php" method="post">
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="nome completo" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="genre" id="genre" placeholder="Género" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30 textbox-n"  onfocus="(this.type='date')" name="date_of_birth" id="date_of_birth" placeholder="Data de nascimento" required>
                                            </div>
                                        </div>


                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="level_of_schooling" id="level_of_schooling" placeholder="Níveil de escolaridade">
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <select class="browser-default custom-select" name="category">
                                                    <option selected>Seleciona categoria</option>
                                                    <option value="Estudante">Estudante</option>
                                                    <option value="Pai ou encarregados de Educação">Pai ou encarregados de Educação</option>
                                                </select>
                                            </div>
                                        </div>


                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="residence" id="residence" placeholder="Residencia">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="contact" id="contact" placeholder="Contacto">
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
                                                <input type="password" class="form-control mb-30" name="password" id="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        
                                        <!-- Button -->
                                       
                                        <div class="col-12">
                                            <button type="register" name="register_intro" class="btn btn-primary btn-lg btn-block">Registar <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row d-flex justify-content-center " style="margin: 2px;">
                            <p class="text-info">Ja tens uma conta?</p>
                            <button onclick="window.location.href='login/index.php'" class="btn btn btn-outline-info btn-lg btn-block">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->

    
  

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
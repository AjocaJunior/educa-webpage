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
                            <form>
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="nome completo" >
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="genre" id="genre" placeholder="Género">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30 textbox-n"  onfocus="(this.type='date')" name="date_of_birth" id="date_of_birth" placeholder="Data de nascimento">
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
                                                <select class="browser-default custom-select" id="category">
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
                                       
                                    </div>
                                </div>
                            </form>


                            <button onclick="register_institution()"  class="btn  btn-primary btn-user btn-block">
                <i class="fab fa-sign-in fa-fw"></i> Registar a instituição
            </button>
                           
                            <div class="col-12">
                                            <button type="submit" onclick="addButton()" class="btn btn-primary btn-lg btn-block">Registahjdfhjlbbhjbhjfdhjr <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                        </div>
                        <div class="row d-flex justify-content-center " style="margin: 2px;">
                            <p class="text-info">Ja tens uma conta?</p>
                            <button id="btn" name="btn" class="btn btn btn-outline-info btn-lg btn-block">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->

  
    <script src="js/myscript.js"></script>
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


    
    <script>
    function addButton() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var contact = document.getElementById('contact').value;
    var genre = document.getElementById('genre').value;
    var date_of_birth = document.getElementById('date_of_birth').value;
    var category = document.getElementById('category').value;
    var residence = document.getElementById('residence').value;
    var userId = "aaa";
    var imageUrl = "ddd";

    firebase.auth().createUserWithEmailAndPassword(email, password )
    .then(function(data){
        userId = data.user.uid;
        alert("helo");
        create(userId ,name , email ,  password , imageUrl ,  contact ,  genre , date_of_birth , category , residence);


    //Here if you want you can sign in the user
    }).catch(function(error) {
        alert("ola");
    //Handle error
});

}


function create(userId ,name , email ,  password , imageUrl ,  contact ,  genre , date_of_birth , category , residence) {
    var data = {
               userId:userId,
               name:name, 
               email:email, 
               password:password,
               imageUrl:imageUrl, 
               contact:contact,
               genre:genre, 
               date_of_birth:date_of_birth, 
               category:category,
               residence:residence
    };

    return firebase.database().ref().child('users').push(data);
}

    </script>



</body>

</html>
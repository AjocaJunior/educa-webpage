<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Publicar Anúncio - Educa</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="../img/educa/logo.png">
</head>

<body style="background-color: #e9eef4">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4 text-uppercase">Publicar Anúncio</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" id="" class="form-control form-control-user" placeholder="Nome do anúncio" riquered>
                                    </div>
                                   
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" id="contact" class="form-control form-control-user" placeholder="Contacto">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" id="website" class="form-control form-control-user" placeholder="Website">
                                    </div>
                                </div>
                                
                          

                                <div class="form-group row">
                                    <div class="col-12 col-md-6">

                                    <select class="browser-default custom-select" id="direccionamento" required>
                                        <option selected>Direccionamento</option>
                                        <option value="website">Website</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                        <option value="">Whatsapp</option>
                                    </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                               
                               
                                    </div>
                                    
                                   
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <img src="img/logo.png" height="38" class="input-group-text" />
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="photo" class="custom-file-input" id="photo" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="photo">Foto de Destaque</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="text-uppercase">Descreva o ponto turístico</label>
                                    <textarea class="form-control" id="ponto_description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="text-uppercase">Dados de Login</label>
                                </div>

                                <div class="form-group">
                                    <input type="text" id="verification_code" class="form-control form-control-user" placeholder="Codigo de verificação">
                                </div>

                                <div class="form-group">
                                    <input type="email" id="email" class="form-control form-control-user" placeholder="Email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" id="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" id="confirm_password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repetir  Password">
                                    </div>
                                </div>


                                </button>
                                <hr>


                            </form>
                            <button onclick="register_ponto()" class="btn  btn-user btn-block" style="background:#f8871f;border-radius:0px; color: white;">
                <i class="fab fa-sign-in fa-fw"></i> Registrar Ponto Turístico
            </button>
                            <hr>
                            <div class="text-center">
                                <!--                <a class="small" href="forgot-password.html">Forgot Password?</a>-->
                            </div>
                            <div class="text-center">
                                <a class="small" href="expositor_login.php">Já tem uma conta? Conecte-se!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="../js/db/app.js"></script>
    <script src="../js/db/real-time-database.js"></script>


    <script>
const source = document.querySelector("#category");
const target = document.querySelector("#sub-category");

// const displayWhenSelected = (source, value, target) => {
//     const selectedIndex = source.selectedIndex;
//     const isSelected = source[selectedIndex].value === value;
//     target.classList[isSelected
//         ? "add"
//         : "remove"
//     ]("show");
// };
// source.addEventListener("change", (evt) =>
//     displayWhenSelected(source, "", target)
// );




// const target2 = document.querySelector("#sub-category2");

// const displayWhenSelected = (source, value, target2) => {
//     const selectedIndex = source.selectedIndex;
//     const isSelected = source[selectedIndex].value === value;
//     target2.classList[isSelected
//         ? "add"
//         : "remove"
//     ]("show");
// };



        //add ponto
        function register_ponto() {
            var ponto_name = document.getElementById('ponto_name').value;
            var location = document.getElementById('location').value;
            var contact = document.getElementById('contact').value;
            var website = document.getElementById('website').value;
            var video_link = document.getElementById('video_link').value;
            var ponto_description = document.getElementById('ponto_description').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var uid = uuidv4();

            var e = document.getElementById("category").value;
var f = document.getElementById("subcategory").value;
var subcategory = f;
            var category = e;


            //upload img perfil

            const ref = firebase.storage().ref();
            const file = document.querySelector("#photo").files[0];

            if (file != null) {

                const name = +new Date() + "-" + file.name;
                const metadata = {
                    contentType: file.type
                };
                const task = ref.child(name).put(file, metadata);
                task
                    .then(snapshot => snapshot.ref.getDownloadURL())
                    .then(url => {
                        addInstitution(ponto_name, location, contact, website, video_link, ponto_description, email, password, uid, url, category, subcategory);
                    })
                    .catch(console.error);

            } else {
                addInstitution(ponto_name, location, contact, website, video_link, ponto_description, email, password, uid, "", category, subcategory);
            }
        }

        function addInstitution(ponto_name, location, contact, website, video_link, ponto_description, email, password, uid, img1, category, subcategory) {


            var data = {
                category: category,
                subcategory: subcategory,
                ponto_name: ponto_name,
                location: location,
                phone: contact,
                website: website,
                video_link: video_link,
                visits: '0',
                contact: '0',
                ponto_description: ponto_description,
                email: email,
                password: password,
                img1: img1,
                img2: "",
                chat: "",
                uid: uid
            }

            firebase.database().ref().child('pontoturisticov2').child(uid).set(data, function(error) {
                if (error) {
                    alert("Data could not be saved." + error);
                } else {

                    var e = document.getElementById("category");
                    var positionSelected = e.selectedIndex;

                    window.location.replace("add_actividades.php?id="+uid);
                   

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

    <style>
/* #sub-category {
  display: none;
}

#sub-category.show {
  display: block;
} */

    </style>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastrar Orador - Educa</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/educa/logo.png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                                <h1 class="h4 text-gray-900 mb-4 text-uppercase">Cadastrar Orador</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="orador_nome" class="form-control form-control-user"
                                            placeholder="Nome do Orador">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="profissao" class="form-control form-control-user"
                                            placeholder="Profissão">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <input type="text" id="chat" class="form-control form-control-user"
                                        placeholder="Link do chat">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="facebook" class="form-control form-control-user"
                                            placeholder="Facebook">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="linkedin" class="form-control form-control-user"
                                            placeholder="LinkedIn">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="twitter" class="form-control form-control-user"
                                            placeholder="Twitter">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="instagram" class="form-control form-control-user"
                                            placeholder="Instagram">
                                    </div>

                                    <br>
                                    <br>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-6 mb-sm-0">
                                        <input type="text" id="description" class="form-control form-control-user"
                                            placeholder="Descricao(opcional)">

                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <img src="img/logo.png" height="38" class="input-group-text" />
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="photo" class="custom-file-input" id="photo"
                                                    aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="photo">Foto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button onclick="registar_orador()" type="button"
                                    class="btn btn-secondary btn-lg btn-block">ADICIONAR ORADOR</button>
                            </form>
                            <br>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    ORADORES CADASTRADOS
                                </a>

                                <?php
                                 $id = '';
                                 if(isset($_GET['id'])) {
                                     $id = $_GET['id'];

                                 } else {
                                     header('Location: evento_register.html');
                                 }

                                  include_once('../includes/dbconfig.php');
                                  $ref = 'evento/'.$id.'/orador';

                                  $fetchdata = $database->getReference($ref)->getValue();

                                  ?>



                                <?php if($fetchdata != null):?>
                                <?php foreach( $fetchdata as $key => $row): ?>

                                <a href="#"
                                    class="list-group-item list-group-item-action"><?php echo $row['orador_nome']; ?></a>

                                <?php endforeach ?>


                                <?php endif?>


                            </div>

                            <br>

                            <!--?php $href = "add_college.php?id=".$_GET['id']; ?->
                            <!-- <button type="button" onclick='window.location.href="<!--?php echo $href; ?->"'
                                class="btn btn-link btn-lg btn-block">ADICIONAR FACULDADES</button> -->

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
    function registar_orador() {
        var orador_nome = document.getElementById("orador_nome").value;
        var profissao = document.getElementById("profissao").value;
        var chat = document.getElementById("chat").value;
        var facebook = document.getElementById("facebook").value;
        var linkedin = document.getElementById("linkedin").value;
        var instagram = document.getElementById("instagram").value;
        var twitter = document.getElementById("twitter").value;
        var description = document.getElementById("description").value;
        var uid = "<?php echo $_GET['id'] ?>";

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
                    addOrador(orador_nome, profissao, chat, facebook, linkedin, instagram, twitter, description,
                        uid, url);
                })
                .catch(console.error);

        } else {
            addOrador(orador_nome, profissao, chat, facebook, linkedin, instagram, twitter, description, uid, "");
        }
    }



    function addOrador(orador_nome, profissao, chat, facebook, linkedin, instagram, twitter, description, uid,
        img_orador) {
        var data = {
            orador_nome: orador_nome,
            profissao: profissao,
            chat: chat,
            facebook: facebook,
            linkedin: linkedin,
            instagram: instagram,
            twitter: twitter,
            description: description,

            img_orador: img_orador,
            uid: uid
        }

        firebase.database().ref().child('evento').child(uid).child("orador").child(uuidv4()).set(data, function(
            error) {
            if (error) {
                alert("Data could not be saved." + error);
            } else {
                window.location.reload();
            }
        });
    }



    function uuidv4() { // Public Domain/MIT
        var d = new Date().getTime(); //Timestamp
        var d2 = (performance && performance.now && (performance.now() * 1000)) ||
            0; //Time in microseconds since page-load or 0 if unsupported
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = Math.random() * 16; //random number between 0 and 16
            if (d > 0) { //Use timestamp until depleted
                r = (d + r) % 16 | 0;
                d = Math.floor(d / 16);
            } else { //Use microseconds since page-load if supported
                r = (d2 + r) % 16 | 0;
                d2 = Math.floor(d2 / 16);
            }
            return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
        });
    }
    </script>
</body>

</html>

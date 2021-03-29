<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastrar Bolsas de Estudo</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="../img/educa/logo.png">
</head>

<body style="background-color: #e9eef4">
<?php

include_once('../includes/dbconfig.php');  
$ref = 'bolsadeestudo';
   $fetchdata = $database->getReference($ref)->getValue();

?>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4 text-uppercase">Cadastrar Bolsas</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <select class="browser-default custom-select" id="category">
                                        <option selected>Selecciona </option>
                                        <option value="Interna">Interna</option>
                                        <option value="Externa">Externa</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="descricao" class="form-control form-control-user"
                                            placeholder="Descrição">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" id="pais" class="form-control form-control-user"
                                            placeholder="País">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        <input type="text" id="instituicao" class="form-control form-control-user"
                                            placeholder="Instituição">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="date" id="date" class="form-control form-control-user"
                                            placeholder="Data Limite">
                                    </div>
                                </div>


                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <img src="img/logo.png" height="38" class="input-group-text" />
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="arquivo" class="custom-file-input" id="arquivo"
                                                    aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="arquivo">Arquivo PDF</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                </button>
                                <hr>


                            </form>
                            <button onclick="register_bolsa()" class="btn  btn-user btn-block"
                                style="background:#f8871f;border-radius:0px; color: white;">
                                <i class="fab fa-sign-in fa-fw"></i> Registrar Bolsa
                            </button>



                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12">


                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Bolsas Disponíveis</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Categoria</th>
                                                <th>País</th>
                                                <th>Instituição</th>
                                                <th>Descrição</th>
                                                <th>Data de Expiração</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                         <?php
                                            //    $id = '';
                                            //    if(isset($_GET['id'])) {
                                            //        $id = $_GET['id'];

                                            //    } else {
                                            //        header('Location: register.html');
                                            //    }


                                        
                                                  

                                                    if($fetchdata != null){
                                                        foreach($fetchdata as $key => $row){
                                                     
                                                        
 
                                                ?>
                                            <tr>
                                                <td><?php echo $row['category'] ?></td>
                                                <td><?php echo $row['pais'] ?> </td>
                                                <td><?php echo $row['instituicao'] ?> </td>
                                                <td><?php echo $row['descricao'] ?></td>
                                                <td><?php echo $row['date'] ?></td>
                                             </tr>


                                            <?php 
                                                           }
                                                }?>




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
//apagar bolsa
<?php 

if($fetchdata != null){
    foreach($fetchdata as $key => $row){

?>


function apagar(uidImg){
    firebase.database().ref().child('bolsadeestudo').child(uid).remove()
            .then(function() {
                window.location.reload();
            })
            .catch(function(error) {
                alert("Opsss ocoreu uma falha");
            });

}

<?php
    }
}

?>

    //add institution
    function register_bolsa() {
        var instituicao = document.getElementById('instituicao').value;
        var pais = document.getElementById('pais').value;
        var descricao = document.getElementById('descricao').value;
        var date = document.getElementById('date').value;
        var uid = uuidv4();

        var e = document.getElementById("category").value;

        var category = e;

        //upload img perfil

        const ref = firebase.storage().ref();
        const file = document.querySelector("#arquivo").files[0];

        if (file != null) {

            const name = +new Date() + "-" + file.name;
            const metadata = {
                contentType: file.type
            };
            const task = ref.child(name).put(file, metadata);
            task
                .then(snapshot => snapshot.ref.getDownloadURL())
                .then(url => {
                    addCalendario(instituicao, pais, descricao, category, date, uid, url);
                })
                .catch(console.error);

        } else {
            addCalendario(instituicao, pais, descricao, category, date, uid, "");
        }

    }

    function addCalendario(instituicao, pais, descricao, category, date, uid, url) {


        var data = {
            instituicao: instituicao,
            pais: pais,
            descricao: descricao,
            category: category,


            date: date,
            uid: uid,
            url: url
        }

        firebase.database().ref().child('bolsadeestudo').child(uid).set(data, function(error) {
            if (error) {
                alert("Data could not be saved." + error);
            } else {
                alert("Adicionado com sucesso!");
                window.location.reload();

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

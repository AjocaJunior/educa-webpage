<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cadastrar instituição - Educa</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 text-uppercase">Cadastrar curso</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-12 mb-6 mb-sm-0">
                    <input type="text" id="course" class="form-control form-control-user" placeholder="Curso">
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1" class="text-uppercase">Descrição do curso</label>
                  <textarea class="form-control" id="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button onclick="addCourse()" type="button" class="btn btn-secondary btn-lg btn-block">ADICIONAR CURSO</button>

                <br>
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action active">
                    CURSOS CADASTRADOS
                  </a>

                             <?php
                                 $id = '';
                                 if(isset($_GET['id'])) {
                                     $id = $_GET['id'];

                                 } else {
                                     header('Location: register.html');
                                 }

                                  include_once('../includes/dbconfig.php');
                                  $ref = 'institution/'.$id.'/course';

                                  $fetchdata = $database->getReference($ref)->getValue();

                                  ?>



                                 <?php if($fetchdata != null):?>
                                   <?php foreach( $fetchdata as $key => $row): ?>

                                        <a href="#" class="list-group-item list-group-item-action"><?php echo $row['course']; ?></a>

                                   <?php endforeach ?>


                                 <?php endif?>



                </div>

                <br>

               <?php $href = "add_college.php?id=".$_GET['id']; ?>
               <button type="button" onclick='window.location.href="<?php echo $href; ?>"' class="btn btn-link btn-lg btn-block">ADICIONAR FACULDADES</button>

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


    function addCourse(){
      var course         = document.getElementById("course").value;
      var description    = document.getElementById("description").value;
      var uid            = "<?php echo $_GET['id'] ?>";

      var data = {
        course : course,
        description : description,
        uid : uid
      }

      firebase.database().ref().child('institution').child(uid).child("course").child(uuidv4()).set(data , function(error){
        if (error) {
          alert("Data could not be saved." + error);
        } else {
          window.location.reload();
        }
      });
    }

  </script>
</body>

</html>
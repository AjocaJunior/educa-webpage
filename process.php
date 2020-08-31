<?php 

if(isset($_POST['register'])){
    $role = "user";
    $name =  trim($_POST['name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    header('Location: complete_userdata.html');
    echo  $name.$last_name.$email.$password;

}



if(isset($_POST['complete_data'])){
    $province = trim($_POST['province']);
    $neighborhood = trim($_POST['neighborhood']);
    $contact = trim($_POST['contact']);
    $genre  = trim($_POST['genre']);
    $school = trim($_POST['school']);
    $college = trim($_POST['college']);

    echo  $genre;
}

?>
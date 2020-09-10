<?php 
//include file with database settings
require_once 'Firestore.php';
require 'includes/dbconfig.php';
    
//name of the document reference in the firestore 
$fs = new Firestore("users");

//When button register clicked 
if(isset($_POST['register'])){
    $role = "user";
    $name =  trim($_POST['name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

        $data = [
            'id' =>"id",
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'last_name' => $last_name,
            'role' => $role

        ];

       
       $auth = $firebase->getAuth();
       $user = $auth->createUserWithEmailAndPassword($email,$password);
        
       // $fs->newDocument( "a" , $data);
        // var_dump($fs);
       
   

}

if(isset($_POST['createAcount'])){
   header('location: ../register.html');
}

if(isset($_POST['login'])){
     $email = trim($_POST['email']);
     $password =  trim($_POST['password']);

     echo $email.$password;
     
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
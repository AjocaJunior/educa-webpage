<?php
session_start();
//include file with database settings
include_once('includes/dbconfig.php');
$ref = "users/";
$ref_institution = "institution";

function cript(string $pass){
    return md5($pass);
}

//register_institution
if (isset($_POST['register_institution'])){
    $institution_name = trim($_POST['institution_name']);
    $location = trim($_POST['location']);
    $contact = trim($_POST['contact']);
    $website = trim($_POST['website']);
    $video_link = trim($_POST['video_link']);
    $photo_1 = ""; //todo upload file//
    $photo_2 = "";
    $institution_description = trim($_POST['institution_description']);
    $verification_code = trim($_POST['verification_code']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    $data = [
        'institution_name =' => $institution_name,
        'location' => $location,
        'contact' => $contact,
        'contact ' => $contact ,
        'website' => $website,
        'video_link ' => $video_link ,
        'institution_description ' => $institution_description ,
        'email' => $email,
        'password' => $password
    ];

    $postdata = $database->getReference($ref_institution)->push($data);

    if($postdata){
        echo "GooD";
    }else{
        echo "Oppss";
    }

//
//    echo  "Name: ".$institution_name."location: ".$location ;
//    echo "<hr>";
//    echo  "contact: ".$contact."website: ".$website;
//    echo "<hr>";
//    echo  "institution_description: ".$video_link."institution_description: ".$institution_description;
//    echo "<hr>";
//    echo  "verification_code: ".$verification_code."email: ".$email;
//    echo "<hr>";
//    echo  " password: ". $password."confirm_password: ".$confirm_password;
}

//When button register clicked
if (isset($_POST['register_intro'])){
    $_SESSION['timeout'] = time();

    $name = $_POST['name'];
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $contact = trim($_POST['contact']);
    $genre  = trim($_POST['genre']);
    $date_of_birth = trim($_POST['date_of_birth']);
    $category = trim($_POST['category']);
    $residence = trim($_POST['residence']);
    $level_of_schooling = trim($_POST['level_of_schooling']);

    $data = [
        'username' => $name,
        'email' => $email,
        'password' => cript($password),
        'contact ' => $contact ,
        'genre' => $genre,
        'date_of_birth' => $date_of_birth,
        'category' => $category,
        'residence' => $residence,
        'level_of_schooling' => $level_of_schooling
    ];

    $postdata = $database->getReference($ref)->push($data);

    if($postdata){

        header('location : index.php');
    }else{

        header('location : intro.php');

    }

}


if(isset($_POST['login'])){
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $password_db = "" ;
    $email_db = "";

    $fetchdata = $database->getReference($ref)->getValue();
    foreach( $fetchdata as $key => $row){
        $email_db = trim($row['email']);
        $password_db = strtolower($row['password']);

       if ($email == $email_db){
           echo $email_db;
           echo $password_db;
           if (cript($password) == $password_db){
              $_SESSION['logged'] = true;
              header('Location : index.php');
           }else {
               $_SESSION['wrong_password'] = 'true';
               header('Location: login/index.php');
           }
           break;
       }
       $_SESSION['wrong_password'] = 'true';
       header('Location: login/index.php');
    }

}

function genereteID(){
    $d=mktime(11, 14, 54, 8, 12, 2014);
    $newString = str_replace(" ","",date("Ymdhis", $d));
    return   $newString + $newString+ rand(1, 1000000);
}

if(isset($_POST['createAcount'])){
   header('location: ../register.html');
}



if(isset($_POST['complete_data'])){

    $province = trim($_POST['province']);
    $neighborhood = trim($_POST['neighborhood']);
    $contact = trim($_POST['contact']);
    $genre  = trim($_POST['genre']);
    $school = trim($_POST['school']);
    $college = trim($_POST['college']);


}

?>
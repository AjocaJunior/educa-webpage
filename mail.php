<?php
$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
  
   if (empty($name)) {
       $errors[] = 'Preencha o campo Seu nome';
   }

   if (empty($email)) {
       $errors[] = 'Preencha o campo E-mail';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email é inválido';
   }

   if (empty($message)) {
       $errors[] = 'Preencha o campo Sua Mensagem';
   }
}

if (empty($errors)) {
    $toEmail = 'it.onemediamoz@gmail.com';
    $emailSubject = 'Email vindo do website';
    $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

    $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);

    if (mail($toEmail, $emailSubject, $body, $headers)) {
        header('Location: thank-you.html');
    } else {
        $errorMessage = 'Oops, something went wrong. Please try again later';
    }
}else {
   $allErrors = join('<br/>', $errors);
   $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
}

?>


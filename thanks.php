
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];   
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$errors = [];

if (empty($firstname)) {

    $errors[] = "Le prénom est obligatoire . <br></br>";
}
if (empty($lastname)) {
    
    $errors[] = "Le nom est obligatoire . <br></br>";
} 
if (empty($phone)) {

    $errors[] = "Le téléphone est obligatoire . <br></br>";
}
if (empty($email)) {

    $errors[] = "L'email est obligatoire . <br></br>";
    
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $errors[] = "Le format de l'email est invalide . <br></br>";
}
if (empty($subject)) {

    $errors[] = "Le sujet est obligatoire . <br></br>";
}
if (empty($message)) {

    $errors[] = "Le message est obligatoire . <br></br>";
}
if (!empty($errors)) {

    foreach ($errors as $error) {
        echo $error;
    }
} else {

    echo "Merci $firstname $lastname de nous avoir contacté à propos de $subject.
        Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $phone dans les plus brefs délais pour traiter 
        votre demande : $message";
}


<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];   
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo "
Merci $firstname $lastname de nous avoir contacté à propos de $subject.

Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : 

$message";
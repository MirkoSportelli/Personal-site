<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    
    $to = "mirkuzio1@gmail.com";
    $object = "new message from form ";

    
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Intestazioni email
    $headers = "From: $email";

    // Invia l'email
    if (mail($to, $object, $body, $headers)) {
        echo "Email sent with succes!";
    } else {
        echo "Error to send mail.";
    }
} else {
    echo "Not allowed.";
}
?>
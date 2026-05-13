<?php
/**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "solomonjohari@gmail.com";

    $email_subject = "Portfolio Contact Form: " . $subject;

    $email_body = "
    You have received a new message from your portfolio website.

    Name: $name

    Email: $email

    Subject: $subject

    Message:
    $message
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $email_subject, $email_body, $headers)) {
        echo "OK";
    } else {
        echo "Message could not be sent.";
    }

} else {
    echo "Invalid Request";
}

?>


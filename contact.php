<?php
include "./connection.php";
ini_set("SMTP", "mail.example.com");
ini_set("smtp_port", "587");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = 'ravikiran.starcdynelabs@gmail.com';
$subject = 'New Messege form user';
$message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
$headers = "From: $email";

if (mail($to, $subject, $message, $headers)) {
    echo 'Thank you for contacting us. We will get back to you soon.';
} else {
    echo 'Sorry, something went wrong. Please try again later.';
}
?>
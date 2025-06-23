<?php
// Start output buffering to prevent header issues
ob_start();

// Import PHPMailer Classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Form data
$name = $email = $message = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Input fields
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Name validation
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (strlen($name) < 3) {
        $errors[] = "Name must be at least 3 characters.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = "Name can only contain letters and spaces.";
    }

    // Email validation
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Message validation
    if (empty($message)) {
        $errors[] = "Message is required.";
    } elseif (strlen($message) < 10) {
        $errors[] = "Message must be at least 10 characters.";
    } elseif (!preg_match("/^[a-zA-Z0-9\s.,!?@#\$%\^&\*\(\)\-_=+~;:'\"<>]*$/", $message)) {
        $errors[] = "Message contains invalid characters.";
    }

    // If no errors, send the email
    if (empty($errors)) {
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'kainatzahra105@gmail.com'; // Apna email
            $mail->Password ='kbkq xrfz ayad ezym'; // App password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Sender and recipient
            $mail->setFrom($email, $name);
            $mail->addAddress('kainatzahra105@gmail.com');

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Message';
            $mail->Body = "Name: $name <br> Email: $email <br> Message: $message";

            $mail->send();

            header('Location: contact.php?status=success');
            exit();
        } catch (Exception $e) {
            header('Location: contact.php?status=error');
            exit();
        }
    } else {
        // If errors found, redirect back with error
        header('Location: contact.php?status=error');
        exit();
    }
}

ob_end_flush();
?>

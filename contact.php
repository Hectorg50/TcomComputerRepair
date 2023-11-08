<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "tjohnsonruns@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission from your Website";
    $headers = "From: $email";

    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $message_body, $headers)) {
        // Successful submission, you can redirect or display a success message
        header("Location: thank-you.html"); // Create a thank-you page
        exit;
    } else {
        // Error occurred, you can redirect or display an error message
        header("Location: error.html"); // Create an error page
        exit;
    }
}
?>

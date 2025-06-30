<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "marce@breemtech.co.za"; // Change this to your email
    $subject = "New Contact Form Submission";

    $name = htmlspecialchars($_POST['name']);
    $phone =htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message failed to send.";
    }
}
?>
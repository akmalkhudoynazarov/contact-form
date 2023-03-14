<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Check if the form was submitted with the POST method
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'your-email@example.com'; // Replace with your email address
    $subject = 'New message from ' . $name;
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $name <$email>";
    if (mail($to, $subject, $body, $headers)) { // Send the email using the PHP mail() function
        http_response_code(200); // Set the HTTP status code to 200 OK
    } else {
        http_response_code(500); // Set the HTTP status code to 500 Internal Server Error
    }
}

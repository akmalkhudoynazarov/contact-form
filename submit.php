<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $whereto = $_POST["whereto"];
  $wherefrom = $_POST["wherefrom"];

  $to = "digitalwebproducts@gmail.com";
  $subject = "New Form Submission";
  $message = "Name: $name\nPhone: $phone\nEmail: $email\nWhere To: $whereto\nWhere From: $wherefrom";
  $headers = "From: webmaster@example.com";

  if (mail($to, $subject, $message, $headers)) {
    echo json_encode(array("success" => true));
  } else {
    echo json_encode(array("success" => false, "message" => "Failed to send email."));
  }
}

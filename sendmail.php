<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "michaelquaicoe60@gmail.com";
  $subject = "New message from $name";
  $body = "From: $name\nEmail: $email\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "Message sent successfully.";
  } else {
    echo "Error: Message not sent.";
  }
}
?>

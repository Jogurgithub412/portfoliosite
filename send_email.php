<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = "bitterspine@hotmail.com"; // Enter your email address here
  $subject = "New form submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  
  if (mail($to, $subject, $body)) {
    echo "Message sent successfully!";
  } else {
    echo "Error sending message.";
  }
}
?>
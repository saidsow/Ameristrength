<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Email Settings
  $to = "saiddsowma@gmail.com"; // Change this to your email address
  $subject = "Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  // Send email
  if (mail($to, $subject, $body)) {
    echo "Message sent successfully!";
  } else {
    echo "Error sending message.";
  }
}
?>

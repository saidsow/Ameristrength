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
    // Redirect back to the main page after a short delay
    echo '<script>
            setTimeout(function(){
              window.location.href = "index.html"; // Replace "index.html" with your main page URL
            }, 3000); // Redirect after 3 seconds (adjust as needed)
          </script>';
  } else {
    echo "Error sending message.";
  }
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $comments = $_POST['comments'];

  $to = 'hello@snoozz.in';
  $subject = 'New message from ' . $name;
  $body = "Name: $name\nEmail: $email\nMessage: $comments";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully.';
  } else {
    echo 'An error occurred. Please try again later.';
  }
}
?>

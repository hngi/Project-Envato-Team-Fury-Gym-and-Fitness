<?php

if(isset($_POST['Send'])) {
  $name = $_POST['Name'];
  $mailFrom = $_POST['Email'];
  $message = $_POST['Enter your message'];

  if ($name === ''){
    echo "Name cannot be empty."; die();
  }

  if ($email === ''){
    echo "Email cannot be empty."; die();
  }

  else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "Email format invalid."; die();
    }
  }

  if ($message === ''){
    echo "Message cannot be empty."; die();
  }

  $recipient = "enter email address here";
  $mailheader = "From: ".$mailFrom;
  $content = "You have received an email from ".$name.".\n\n".$message;

  mail($recipient, $subject, $content, $mailheader) or die("Error!");

  echo "Email sent!";
  
?>

<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $web = $_POST['web'];
  $message = $_POST['message'];

  if(!empty($email) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "globalgospelnetworkministry@gmail.com";
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nweb: $web\nMessage: $message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
        echo "Success ,message sent.";
      }else{
            echo "Sorry, failed to send message";
        }
    }else{
        echo "Enter a valid email address!";
    }

  }else{
    echo "Email address and password is required";
  }
    
?>
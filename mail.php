<?php
    $to = 'kevinarias.eecs@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];
    

    $message = "Name: ".$name."\n\n".$text;

    $headers = "From: " . $email; // Sender's E-mail
    

    

    if (mail($to, $subject, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>

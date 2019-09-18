<?php

    if (isset($_POST['sumit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $txt=$_POST['message'];

        $to='kevinarias.eecs@gmail.com';
        $message="Name: ".$name."\n"."E-mail: ".$email."\n"."Wrote the following: "."\n".$txt;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "Thank you! The message has been sent. I will get back to you soon.";
        }else{
            echo "failed";
        }
    }
    

?>

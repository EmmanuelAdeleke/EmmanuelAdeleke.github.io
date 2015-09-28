<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    echo $name . "<br>";
    echo $email . "<br>";
    echo $message;

    $to = "emmanuel_adeleke@hotmail.co.uk";
    $subject = "Hello";
    $headers = "From: webmaster@example.com" . "\r\n" .
        "CC: somebodyelse@example.com";

    mail($to,$subject,"asd",$headers);
?>
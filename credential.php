<!--<!doctype html>
<html>
    <head>
    <title>test mail</title>
    </head>
    <body>
        <lable>Email: </lable><input type="Email" id="email" name="email" placeholder="email id" required><br><br><br>
        <lable>Subject: </lable><input type="text" id="sub" name="sub"><br><br><br><br>
        <lable>Body: </lable><textarea id="body" name="body">ha ha testing</textarea><br><br><br>
        <input type="submit" id="submit" name="submit">
    </body>
</html>-->
<?php

    $to = 'monishankarnath@gmail.com'; //$_GET["email"];
    $subject= "subject test"; //$_GET["sub"];
    $message= "Testing !!!";
    $headers = 'From: needdoc247@gmail.com';
    
    if (mail($to, $subject, $message, $headers))
    {
        echo "mail sent";
    }
    else
    {
        echo "not sent";
    }

?>

<?php
$to = "needdoc247@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: needdoc247@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
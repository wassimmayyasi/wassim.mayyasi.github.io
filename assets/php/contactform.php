<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "wassim.mayyasi@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = $name." just send you an email.\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html");
}
?>

<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "info@nereus-diving.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an E-Mail from ".$name.".\n\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: about.php?mailsend");
}

?>
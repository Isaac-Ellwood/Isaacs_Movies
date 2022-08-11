<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $mesage = $_POST['message'];

    $mailTo = "isaellw@chbc.school.nz";
    $headers = "from: ".$mailFrom;
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact_me.php?mailsend");
}
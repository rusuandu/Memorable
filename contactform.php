<?php

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "rusuandu@yahoo.com";
        $headers= "From: ".$email;
        $txt = "Ai primit un mail de la ".$name.".\n\n".$message;

        mail($email, $subject, $txt, $headers);
        header("Location: bloginfo('stylesheet_directory')/page-contact.php?mailsend");
    }


?>
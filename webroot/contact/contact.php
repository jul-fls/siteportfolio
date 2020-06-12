<?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email_from = $_POST["email_from"];

    $header = "From:contact@flusin.fr \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset= utf-8\r\n";
    
    $to_me = "julien@flusin.fr";
    $subject_me = "Contact via le site : ".$_POST["subject"];
    $message_me = "<h1>Contact de ".$firstname." ".$lastname.", email: ".$email_from."</h1>";
    $message_me .= "<br />"."<h3>".nl2br($_POST["message"])."</h3>";

    $to_copy = $email_from;
    $subject_copy = "Votre demande de contact via le site flusin.fr";
    $message_copy .= "<h4>Votre Prénom : ".$firstname."</h4>"."<br />";
    $message_copy .= "<h4>Votre Nom : ".$lastname."</h4>"."<br />";
    $message_copy .= "<h4>Votre adresse e-mail : ".$email_from."</h4>"."<br />";
    $message_copy .= "<h4>Vous avez mis comme sujet : ".$_POST["subject"]."</h4>"."<br />";
    $message_copy .= "<h4>Vous avez mis comme message : "."<br /><br />".nl2br($_POST["message"])."</h4>";
    
    $retval_me = mail($to_me,$subject_me,$message_me,$header);
    $retval_copy = mail($to_copy,$subject_copy,$message_copy,$header);
    
    if( $retval_me == true && $retval_copy == true) {
        header('Location: message_sent.html');
    }else {
        header('Location: message_not_sent.html');
    }
?>
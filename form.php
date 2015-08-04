<?php
    if (isset($_POST["btnContactUs"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
		$message = $_POST['message'];
        $from = "From : ".$_POST['email']."";
        $to = 'contact@webtac.fr'; 
        
        $body = "From: $name\nE-Mail: $email\nMessage: $message";
 
 
// If there are no errors, send the email

    if (mail ($to, $subject, $body, $from)) {
        echo'Email envoy&eacute;. Retournez sur notre site internet <a href="http://www.webtac.fr">http://www.webtac.fr</a>';
		header ("Refresh: 5;URL=http://www.webtac.fr");
    } else {
        echo 'Arf, un problème est survenu pendant l\'envoi de l\'email. Retentez votre chance dans un instant.';
    }
}

?>
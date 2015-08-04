<?php
    if (isset($_POST["btnContactUs"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = intval($_POST['subject']);
		$message = $_POST['message'];
        $from = 'Demo Contact Form'; 
        $to = 'contact@webtac.fr'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
 
// If there are no errors, send the email

    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}

?>
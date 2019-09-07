<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $title_of_message = $_POST['title'];
    $message = $_POST['message'];

    $email_from = 'file:///C:/Users/te/Documents/vscode/contact.html';
    $email_subject = 'Conatct Form Submission';
    $email_body = " User Name : $name.\n".
                    "User Email: $visitor_email.\n".
                     "User Message: $message.\n";

    $to = "adeyemoadedamola1@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject, $email_body,$headers);

    header("Location: contact.html");

?>
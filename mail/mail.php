<?php
$email_name = "maxgmayo";
$email_direct = "@gmail.com";
$to = $email_name . $email_direct;
$to_address = $to;
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$message_wrap = wordwrap($message, 70, "\r\n");
$from_email = $_POST['email'];
$headers = "From: " . "'$name'" . " " . "'$from_email'" . "\r\n";
if (mail("$to_address","$subject","$message_wrap", "$headers")){
    header('Location: http://www.maximilianmayo.com');
    print "Email has been sent.";
} else {
    header('Location: http://www.maximilianmayo.com');
    print "Email was not sent.";
}
?>
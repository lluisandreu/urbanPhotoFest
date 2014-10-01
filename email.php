<?php

if(isset($_POST['submit'])){

       $to = "oliverobrador@gmail.com";
       $subject = "New enquiry form submission from UPF website";
       $error_message = "";

           // validation expected data exists
       if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])) {
        $error_message = 'We are sorry, but there appears to be a problem with the form you submitted.';
       }

       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];

       $error_message = "";

       $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
       if(!preg_match($email_exp,$email)) {
              $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
       }

       $string_exp = "/^[A-Za-z .'-]+$/";
       if(!preg_match($string_exp,$name)) {
              $error_message .= 'The Name you entered does not appear to be valid.<br />';
       }

       if(strlen($error_message) > 0) {
              print ($error_message);
       }

       $email_message = "";

       $email_message .= "Name: ". $name."\n";

       $email_message .= "Email: ". $email."\n";

       $email_message .= "Message: ". $message."\n";

       $headers = 'From: '.$email."\r\n".

       'Reply-To: '.$email."\r\n" .

       'X-Mailer: PHP/' . phpversion();

       @mail($email_to, $subject, $email_message, $headers);

?>

<h1>Thanks for your message</h1>

<?php
}
?>



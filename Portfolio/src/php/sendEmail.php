<?php
//
//// Replace this with your own email address
//$to = $contactVar["contact"]["email"];
//
//function url(){
//  return sprintf(
//    "%s://%s",
//    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
//    $_SERVER['SERVER_NAME']
//  );
//}
//
//if($_POST) {
//
//   $name = trim(stripslashes($_POST['name']));
//   $email = trim(stripslashes($_POST['email']));
//   $subject = trim(stripslashes($_POST['subject']));
//   $contact_message = trim(stripslashes($_POST['message']));
//
//
//	if ($subject == '') { $subject = "Contact Form Submission"; }
//
//   // Set Message
//   $message .= "Email from: " . $name . "<br />";
//	 $message .= "Email address: " . $email . "<br />";
//   $message .= "Message: <br />";
//   $message .= nl2br($contact_message);
//   $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";
//
//   // Set From: header
//   $from =  $name . " <" . $email . ">";
//
//   // Email Headers
//	$headers = "From: " . $from . "\r\n";
//	$headers .= "Reply-To: ". $email . "\r\n";
// 	$headers .= "MIME-Version: 1.0\r\n";
//	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//
//   ini_set("sendmail_from", $to); // for windows server
//   $mail = mail($to, $subject, $message, $headers);
//
//	if ($mail) { echo "OK"; }
//   else { echo "Something went wrong. Please try again."; }
//
//}
//
//
//# Include the Autoloader (see "Libraries" for install instructions)
//require 'vendor/autoload.php';
//use Mailgun\Mailgun;
//# Instantiate the client.
//$mgClient = new Mailgun('374e13be6458e1eede5b01a183bbc36f-e5475b88-961c81f8');
//$domain = "YOUR_DOMAIN_NAME";
//# Make the call to the client.
//$result = $mgClient->sendMessage($domain, array(
//    'from'	=> 'Excited User <mailgun@YOUR_DOMAIN_NAME>',
//    'to'	=> 'Baz <YOU@YOUR_DOMAIN_NAME>',
//    'subject' => 'Hello',
//    'text'	=> 'Testing some Mailgun awesomeness!'
//));

(function () {
    if ($_POST) {


        mail("nick.alwin.oost@gmail.com", "Here is the subject line",


            $_POST["insert your message here"] . "From: an@email.address");


    }
})();



?>


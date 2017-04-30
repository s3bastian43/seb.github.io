<?php
/*
if (isset($_POST['email'], $_POST['name'], $_POST['message'], $_POST['subject']))  {


require 'PHPMailer/PHPMailerAutoload.php';


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "s3by.go@gmail.com";
$mail->Password = "campionii";
$mail->AddReplyTo($email, $name);
$mail->SetFrom($email, $name);
$mail->Subject = $subject;
$mail->Body ="From: " . $name . " (" . $email . ")<br/>" . "Subject: " . $subject . '<br/>Message: ' . $message;
$mail->AddAddress("ciobanu.sebastian96@yahoo.com");
$mail->AddAddress("s3by.go@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
    header("Location:home.html#dialog");
 }
}
else{
  echo "Please send a message using the contact form";
}
*/
if (isset($_POST['email'], $_POST['name'], $_POST['message'], $_POST['subject']))  {
$to      = 'ciobanu.sebastian96@yahoo.com';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = $_POST['email'] . "\r\n" .
    'Reply-To:' . $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

//mail($to, $subject, $message, $headers);

if(!mail($to, $subject, $message, $headers)) {
    echo 'There was a problem with the mailing function, please try again <br/>
          Alternatively, you could contact me using social media links. Thank you and apologies for any inconvenience';
 } else {
    echo "Message has been sent";
    header("Location:home.html#dialog");
 }
}
else{
  echo "Please send a message using the contact form";
}

 ?>

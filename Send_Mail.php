<?php include 'C:\xampp\htdocs\blood\PHPMailer-master\src\phpMailer.php';?>
<?php require 'C:\xampp\htdocs\blood\PHPMailer-master\src\class.phpMailer.php'; ?>
<?php
function Send_Mail($to,$subject,$body)
{

$from       = "bloodbankbanglore@gmail.com";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "tls://smtp.gmail.com"; // SMTP host
$mail->Port       =  587;                    // set the SMTP port
$mail->Username   = "K A Blood Bank";  // SMTP  username
$mail->Password   = "7736262737";  // SMTP password
$mail->SetFrom($from, 'From Name');
$mail->AddReplyTo($to,'From Name');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send();
}
?>

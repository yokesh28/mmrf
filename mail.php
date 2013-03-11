
<?php
if (isset($_REQUEST['email']))

{
	//send email
	$to = 'info@mmrf.in';

$subject = 'Website Change Reqest';

$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = '<html><body>';

mail($to, $subject, $message, $headers);
}

?>
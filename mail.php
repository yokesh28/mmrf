
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


$message = '<table>
<tr>
<td>
<img src="images/mmrf_logo.png" width="122" height="80" />
</td>
<td>MMRF Reality And Infrastructure Pvt Ltd... </td>
</tr>
<table border="1" >

<tr>
<td>
Name:
</td>
<td>'.$_REQUEST['name'].'</td>
</tr>

<tr>
<td>Address:</td>
<td>'.$_REQUEST['address'].'</td>
</tr>



<tr>
<td>Email:</td>
<td>'.$_REQUEST['email'].'</td>
</tr>

<tr>
<td>MobileNo:</td>
<td>'.$_REQUEST['mobile'].'</td>
</tr>

<tr>
<td>Location:</td>
<td>'.$_REQUEST['location'].'</td>
</tr>

<tr>
<td>BulidArea:</td>
<td>'.$_REQUEST['bulid_area'].'</td>
</tr>

<tr>
<td>City:</td>
<td>'.$_REQUEST['city'].'</td>
</tr>

<tr>
<td>Pincode:</td>
<td>'.$_REQUEST['pincode'].'</td>
</tr>

<tr>
<td>Phone No:</td>
<td>'.$_REQUEST['phone'].'</td>
</tr>

<tr>
<td>Budget:</td>
<td>'.$_REQUEST['budget'].'</td>
</tr>

<tr>
<td>Post Enquiry:</td>
<td>'.$_REQUEST['enquiry'].' </td>
</tr>
</table>

</table>';

mail($to, $subject, $message, $headers);
}

?>

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
<td>Coimbatore</td>
</tr>

<tr>
<td>Address:</td>
<td>Coimbatore</td>
</tr>

<tr>
<td>Email:</td>
<td>annamalai.cs@gmail.com</td>
</tr>

<tr>
<td>MobileNo:</td>
<td>7401062094</td>
</tr>

<tr>
<td>Location:</td>
<td>Cbe</td>
</tr>

<tr>
<td>BulidArea:</td>
<td>10,000 to 50,000</td>
</tr>

<tr>
<td>City:</td>
<td>Coimbatore</td>
</tr>

<tr>
<td>Pincode:</td>
<td>6420094</td>
</tr>

<tr>
<td>Phone No:</td>
<td>0422-245643</td>
</tr>

<tr>
<td>Budget:</td>
<td>1,00,00000 to 3,00,00000</td>
</tr>

<tr>
<td>Post Enquiry:</td>
<td>I will purchase </td>
</tr>
</table>

</table>';

mail($to, $subject, $message, $headers);
}

?>
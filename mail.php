<?php 
if(isset($_POST['submit'])){

$to = "info@tripknock.com";

$name = $_POST['name'];
$persons= $_POST['persons'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$date= $_POST['date'];
$message=$_POST['message'];


$mail1 ="
Full Name : $name
Total Pax. : $persons
Phone No : $phone
Email I'd : $email
Travel Date : $date
Message: $message ";

$body   = $mail1 ;
$Subject="Enquiry from Varanasi Tour";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers = "From: info@tripknock.com" . "\r\n".
"CC: vinay9984.nwj@gmail.com";

mail($to,$Subject,$body,$headers);

header('Location: thanks.html');
}
?>

<?php
$email=$_POST['email'];
$message=json_encode($_POST);
$receiver="MY_EMAIL@yahoo.com";
$mailer="mailer@myservice.com";

mail($email,"Message for enquiry or whatever",$message,  array("from"=>$mailer));
?>
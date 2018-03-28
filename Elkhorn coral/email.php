<?php
//if"email" variable is filled out,send email
if (isset($_REQUEST['email'])){
	//Email information
	$admin_email="asikoeverlyn@gmail.com";
	$name=$_REQUEST['inputName'];
	$email=$_REQUEST['inputEmail'];
	$message=$_REQUEST['inputMessage'];

	//send email
	mail($admin_email,"$subject",$message,"From:".$email);

	//Email response
	echo "Thank you for contacting us!";
}
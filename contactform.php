<?php
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	
	$mailTo = "erving.mar1@aol.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have receiven and email from ".$name.".\n\n".$message;
	
	
	mail($mailTo,$subject, $txt, $headers );
	header("Location: inde.html?mailsend");
}

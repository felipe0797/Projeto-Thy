<?php
	include('email.php');
	$m = new Mail($_POST);
	$m->sendMail();
?>
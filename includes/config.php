<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Asia/Kolkata");

	$con = mysqli_connect("127.0.0.1", "ravi1408", "", "slotify");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
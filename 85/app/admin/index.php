<?php
	error_reporting(0);
	session_start();
	
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 'True') {
		echo "key:9y6u8s5m";
	}
	else
	{
		header("location: ..\index.php");
	}
	
?>
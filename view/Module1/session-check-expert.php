<?php
	session_start();

	//If session is not set, then redirect to Login Page
	if(!isset($_SESSION['username'])) {
		echo "<script>alert('Your session has timed out. Please log in again.'); window.location='../Module1/login-expert.php'</script>";
	}
?>
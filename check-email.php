<?php

	require_once 'config.php';

	if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
		
		$email = trim($_REQUEST['email']);
		$email = strip_tags($email);
		
		$query = "SELECT userEmail FROM tbl_users WHERE userEmail='$email'";
		$stmt = mysqli_query ($link, $query);
		
		if (mysqli_num_rows($stmt) > 0) {
			echo 'false'; // email already taken
		} else {
			echo 'true'; 
		}
	}

?>
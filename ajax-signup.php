<?php

	header('Content-type: application/json');

	require_once 'config.php';
	
	$response = array();

	if ($_POST) {
		
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$pass = trim($_POST['cpassword']);
		
		$full_name = strip_tags($name);
		$user_email = strip_tags($email);
		$user_pass = strip_tags($pass);
		
		// sha256 password hashing
		$hashed_password = password_hash($user_pass, PASSWORD_DEFAULT);
		
		$query = "INSERT INTO tbl_users (fullName, userEmail, userPassword) VALUES ('$full_name', '$user_email', '$hashed_password')";

		$stmt =  mysqli_query($link, $query);
		
		// check for successfull registration
        if ($stmt) {
			$response['status'] = 'success';
			$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; registered sucessfully, you may login now';
        } else {
            $response['status'] = 'error'; // could not register
			$response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; could not register, try again later';
        }	
	}
	
	echo json_encode($response);
	?>
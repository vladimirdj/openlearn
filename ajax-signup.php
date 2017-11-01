<?php

	header('Content-type: application/json');

	require_once 'config.php';
	
	$response = array();

	if ($_POST) {
		
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		
		$full_name = strip_tags($name);
		$user_email = strip_tags($email);
		$user_pass = strip_tags($password);
		$website = $_POST['website'];
		$twitter = $_POST['twitter'];
		$picture = $_FILES['picture']['name'];
		$about = strip_tags($_POST['about']);
		
		//Password hashing
		$hashed_password = password_hash($user_pass, PASSWORD_DEFAULT);


		/* Storing the profile picture in disk and doing validation */
        /* -- Extracting file extensions and filename for renaming the file later on. */
        $file_properties = pathinfo($picture);
        $file_name = $file_properties['filename'];
        $file_extension = $file_properties['extension'];
        /* PART 3.1 ends */

        /* Part 3.2: Preparing file rename */
        $directory = "/var/www/html/open-learning/profile_pictures/";
		$full_directory = $directory.$file_name.rand().'.'.$file_extension; //E.g. - /var/www/html/open-learning/profile_pictures/filename.png
		

		move_uploaded_file($_FILES['picture']['tmp_name'], $full_directory); //Moving file to disk
		
		$query = "INSERT INTO instructor VALUES ('$full_name', '$user_email', '$hashed_password', '$website', '$twitter', '$full_directory', '$about')";

		$stmt =  mysqli_query($link, $query);
		
		// check for successfull registration
        if ($stmt) {
			$response['status'] = 'success';
			$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; Thank you for signing up! You may login now.';
        } else {
            $response['status'] = 'error'; // could not register
			$response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Could not register now. Please try again later.';
        }	
	}
	
	echo json_encode($response);
	?>
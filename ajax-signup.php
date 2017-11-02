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
		$user_picture = $_FILES['profile_picture']['name'];
		$about = strip_tags($_POST['about']);

		//Password hashing
		$hashed_password = password_hash($user_pass, PASSWORD_DEFAULT);

		/* Storing the profile picture in disk and doing validation */
        /* -- Extracting file extensions and filename for renaming the file later on. */
        $file_property = pathinfo($user_picture);
        $pic_filename = $file_property['filename'];
        $pic_file_extension = $file_property['extension'];
        $directory = dirname(__FILE__) . "/profile_pictures/";
		$directory .= $pic_filename.rand().'.'.$pic_file_extension;
		move_uploaded_file($_FILES['profile_picture']['tmp_name'], $directory); //Moving file to the disk


		/* Test upload
		if(isset($_FILES['profile_picture']))
		{
			$img = $_FILES['profile_picture']['name'];
			$tmp = $_FILES['profile_picture']['tmp_name'];
			$path = 'profile_pictures/';

			// get uploaded file's extension
			$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

			// can upload same image using rand function
			$final_image = rand(1000,1000000).$img;

			// check's valid format
			$path = $path.strtolower($final_image);

			move_uploaded_file($tmp, $path);
		}
		/* Test upload ends */

		$query = "INSERT INTO instructor VALUES ('$full_name', '$user_email', '$hashed_password', '$website', '$twitter', '$directory', '$about')";
		$stmt =  mysqli_query($link, $query);

		// check for successful registration
        if ($stmt) {
			$response['status'] = 'success';
			$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; Thank you for signing up! You may login now.';
        } else {
            $response['status'] = 'error'; // could not register
			$response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Could not register now. Please try again later.';
			$response["query"] = mysqli_error($link);
        }
	}

	echo json_encode($response);
?>

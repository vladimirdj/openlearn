<?php

    ini_set ('log_errors', 'on'); //Logging errors
    
    header('Content-type: application/json');
    
    session_start();    

    $response = array();

    require_once 'config.php';

    $inst_email = mysqli_real_escape_string($link, $_POST['instEmail']);
    $inst_password = mysqli_real_escape_string($link, $_POST['instPassword']); 

    $query = "SELECT `password` FROM `instructor` WHERE (`email`='$inst_email')";
    $execute_query = mysqli_query($link, $query);
    $get_row = mysqli_fetch_assoc($execute_query);
    $hashed_db_password = $get_row['password'];

    /*Comparing the entered password with the one in the database, and returning a boolean value.*/
    $isCorrectPassword = password_verify($inst_password, $hashed_db_password);


    $query_login = "SELECT `id`, `email`, `password` FROM `instructor` WHERE (`email`='$inst_email') AND (`password`='$hashed_db_password')";
    $stmt =  mysqli_query($link, $query_login);
    $count = mysqli_num_rows($stmt);

	// check for successful registration
    if (($stmt===true) && ($isCorrectPassword===true) && ($count===1)) {
		$response['status'] = 'success';
		$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp;Your message has been sent successfully!';
    } else {
        $response['status'] = 'error'; // could not register
        $response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Could not send your message. Please try again later.';
    }

    echo json_encode($response);
    
    mysqli_close ($link);
?>
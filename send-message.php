<?php

    ini_set ('log_errors', 'on');
    
    header('Content-type: application/json');

	require_once 'config.php';

    $response = array();

    $student_name = $_POST['senderName'];
    $student_email = $_POST['senderEmail'];
    $student_message = $_POST['senderMessage'];
    $message_id = uniqid();

    $inst_email = $_POST['instEmail'];
	$query = sprintf("INSERT INTO `messages` VALUES ('%s', '%s', '%s', '%s', NOW(), %s)",
                     $message_id, $student_name, $student_email, $student_message,
                     "(SELECT `id` FROM `instructor` WHERE `email`='$inst_email')");

	$stmt =  mysqli_query($link, $query);
	// check for successful registration
    if ($stmt) {
		$response['status'] = 'success';
		$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp;Your message has been sent successfully!';
    } else {
        $response['status'] = 'error'; // could not register
        $response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Could not send your message. Please try again later.';
        $response["query"] = mysqli_error($link);
    }

	echo json_encode($response);
?>
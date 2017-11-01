<?php

    require_once 'config.php';

	if (isset($_REQUEST['profile_picture']) && !empty($_REQUEST['profile_picture'])) {
		
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
?>
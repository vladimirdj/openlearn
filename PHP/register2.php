<?php

    require 'config.php'; //For database connectivity

    //To be removed later:
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    //-----------------------

    if(isset($_POST['submit'])) {
        /* Part 1: Preventing SQL Injection */
        $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $website = mysqli_real_escape_string($connection, $_POST['website']);
        $twitter = mysqli_real_escape_string($connection, $_POST['twitter']);
        $picture = mysqli_real_escape_string($connection, $_FILES['picture']['name']);
        $about = mysqli_real_escape_string($connection, $_POST['about']);
        /* Part 1 ends */


        /* Part 2: Hashing the password */
        $hased_password = password_hash($password, PASSWORD_DEFAULT); 
        /* Part 2 ends */


        /* Part 3: Storing the profile picture in disk and doing validation */
        /* PART 3.1: Extracting file extensions and filename for renaming the file later on. */
        $file_properties = pathinfo($picture);
        $file_name = $file_properties['filename'];
        $file_extension = $file_properties['extension'];
        /* PART 3.1 ends */

        /* Part 3.2: Preparing file rename */
        $directory = "/var/www/html/open-learning/profile_pictures/";
        $directory = $directory.$file_name.rand().'.'.$file_extension; //E.g. - /var/www/html/open-learning/profile_pictures/filename.png
        /* Part 3.2 ends */

        /*Part 4: Moving the data into the MySQL database and the profile picture into the disk */    

        //if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['picture']) && isset($_POST['about'])) {

            /* Check if email exists. If not, then the instructor is good to go. */
        $value_query = mysqli_query($connection, "SELECT email FROM instructor WHERE email='".$email."'");

        if (mysqli_num_rows($value_query) > 0) {
            echo "The email is already taken. Please go back and try another one.";
            
        } else {
            move_uploaded_file($_FILES['picture']['tmp_name'], $directory);
            $query = "INSERT INTO instructor VALUES ('$first_name', '$last_name', '$email', '$hashed_password', '$website', '$twitter', '$directory', '$about')";
            $result = mysqli_query($connection, $query);

            if($result){
                unset($_POST);
                mysqli_close_connection($connection);
                die ("Thank you for signing up!");
            } else {
                    echo "<p>Error occurred: ".mysqli_error()."</p>";
                }   
        }
    }
?>
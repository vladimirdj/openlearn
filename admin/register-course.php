<!DOCTYPE html>
<html>
    <title>Success</title>
    <head>


<?php

    session_start();

    ini_set ('log_errors', 'on'); //Logging errors    

    require_once '../config.php';

    if ($_SESSION['inst_id']) {

        
                $course_id       =   uniqid();
                $course_name     =   $_POST['course-name'];
                $course_category =   $_POST['course-category'];
                $course_info     =   $_POST['course-info'];
                $inst_id         =   $_SESSION['inst_id'];

                $query = "INSERT INTO `courses` VALUES ('$course_id', '$course_name', '$course_category', '$course_info', '$inst_id'";
                $execute_query = mysqli_query($link, $query);

                if($execute_query) {

                    echo "Course created successfully! Redirecting..";
                    echo "<script type='text/javascript'>
                    window.setTimeout(function() {
                        window.location.href = 'course-management.php';
                    }, 3000);
                    </script>";
                }
                else
                {
                    echo ("There is some problem in adding data. Please go back, check, and retry.");
                    echo "<br>".mysqli_error($link);
                    /*echo "<script type='text/javascript'>
                    window.setTimeout(function() {
                        window.location.href = 'create-course.php';
                    }, 3000);
                    </script>"; */
                }
        } else {
        echo "<script type='text/javascript'>
            window.location.href = '../login.php';
        </script>";
    }

?>

</head>

<body>
</body>

</html>
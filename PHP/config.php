<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'toor');
    define('DB_DATABASE', 'openlearn');
   
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if(!$db)
    {
        die ("Error " . mysqli_connect_errno() . ": " . mysqli_connect_error(). $PHP_EOL);
    }
?>
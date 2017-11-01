<?php
   
   $link = mysqli_connect('localhost', 'root', 'toor', 'openlearn');

    if(!$link)
    {
        die ("Error " . mysqli_connect_errno() . ": " . mysqli_connect_error(). $PHP_EOL);
    }
?>
<?php

    $dbcon = mysqli_connect('localhost','root','','courierdb_sql');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>
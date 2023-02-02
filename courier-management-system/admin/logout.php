<!-- it destroy the session and redirect to login page -->
<!-- this will show u the admin page because after logging out you go to the admin page -->
<?php

session_start();
session_destroy();
header('location:adminlogin.php');

?>
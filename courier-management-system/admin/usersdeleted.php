<!-- this page will delete user & there courier when deleteUser link clicked in deleteusers.php by admin -->
<!-- shows the user removed sucessfully trigger -->
<?php
    include('../dbconnection.php');
    $em= $_GET['emm'];
    // echo $em;
    $qry = "DELETE FROM `users` WHERE `email`='$em'";
    $run = mysqli_query($dbcon,$qry);
    // echo $run;
    if($run==true){
    ?>  <script>
        alert('User Removed Successfully :)');
        window.open('deleteusers.php','_self');
        </script>
    <?php

}

?>
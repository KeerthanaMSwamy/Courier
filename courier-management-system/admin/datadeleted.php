    <!-- this page will delete data when deleted by admin -->
    <!-- when reloading this alone, it will show the trigger message -->

<?php
    include('../dbconnection.php');
    $billno= $_REQUEST['bb'];

    $qry = "DELETE FROM `courier` WHERE `billno`='$billno'";
    $run = mysqli_query($dbcon,$qry);
    // echo $run;
    if($run==true){
    ?>  <script>
        alert('Courier Deleted Successfully :)');
        window.open('deletedata.php','_self');//_self is used to open in same page
                 //inside php after echo rem to put  ";"
        </script>
    <?php
}
?>
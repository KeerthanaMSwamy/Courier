<!-- this page will display the logs related to user when User Log link clicked in log_display.php by admin -->
<!-- If you reload this page alone u will get 404 error -->
<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>

<div class="admintitle">
    <div>
        <h4><a href="./dashboard.php" style="float: left; margin-left:20px; color:aliceblue;">DASHBOARD</a></h4>
        <h4><a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">Log Out</a></h4>
    </div>
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">LOGS TABLE</h1>
</div>
<div style="overflow-x:auto;">
    <table width='80%' border="1px solid" style="margin-left: auto; margin-right:auto; margin-top:30px; font-weight:bold; border-collapse: separate ; border-color: black;">
        <tr style="background-color: white; ">
            <th style="color: black;" ><h3>NO.</h3></th>
            <th style="color: black;"><h3>USER ID</h3></th>
            <th style="color: black;"><h3>ACTION TIME</h3></th>
            <th style="color: black;"><h3>ACTION PERFORMED</h3></th>
            <th style="color: black;"><h3>ACTION PERFORMED BY</h3></th>
        </tr>
        <?php

        include('../dbconnection.php');
        $qry = "SELECT * FROM `logss`"; //need to find user_id proper one
        $run = mysqli_query($dbcon, $qry);

        if (mysqli_num_rows($run) < 1) {
            echo "<tr><td colspan='6'>There is no Data in Database</td></tr>";
        } else {
            $count = 0;
            while ($data = mysqli_fetch_assoc($run)) {
                $count++;
        ?>
                <tr align="center" style="background-color: white" >
                    <td><?php echo $count; ?></td>
                    <td><?php echo $data['user_id']; ?></td>
                    <td><?php echo $data['action_time']; ?></td>
                    <td><?php echo $data['action_performed']; ?></td>
                    <td><?php echo $data['action_performed_by']; ?></td>
                    <!-- <td><h3><a href="get_log.php" ?emm=<?php echo $data['u_id']; ?>>User Log</a></h3></td> -->
                </tr>
                <style>
                    body {
                        background-color:  white; 
                    }
                </style>
        <?php
            }
        }
        ?>

    </table>
</div>
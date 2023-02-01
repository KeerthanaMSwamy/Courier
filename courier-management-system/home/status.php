<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>
<?php include('header.php');
    include('../dbconnection.php');
    $idd = $_GET['sidd'];

    $qryy= "SELECT * FROM `courier` WHERE `c_id`='$idd'";
    $run= mysqli_query($dbcon,$qryy);
    $data=mysqli_fetch_assoc($run);
    $stdate = $data['date'];
    $tddate= date('Y-m-d');

    if($stdate==$tddate){
        ?>
        <p>🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐</p>
        <h1 style="margin: 100px;background-color:white;text-align:center">Status >> On The Way...</h1>
        <br/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:red;height:50px;width:100px;border-radius:5px;cursor:pointer">RETURN</button>
        </div>
        <br/>
        <p>🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐</p>
         <?php 
    }
    else{
        ?>
        <h1 style="margin: 100px;background-color:red;text-align:center">Status >> Items Delivered..<br /><p>HAVE A NICE DAY</p></h1>
        <br/><hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:green;height:60px;width:130px;border-radius:15px;cursor:pointer">Go Back</button>
        </div>
        <?php
    }
?>



<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('https://static.vecteezy.com/system/resources/previews/007/550/781/non_2x/food-motorbike-delivery-urban-landscape-with-food-courier-driving-bike-fast-delivery-concept-vector.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <h2><b>Welcome To Keerthana & Krishna Courier Services</b></h2>
        <h3>#1 courier service in Asia</h3><br><br>
    </div>
</body>
</html>

<!-- admin dashbord page with options for admin -->
<!-- If you reload this page alone u will get 404 error -->

<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>

<style>
    body {
        background-image: url('https://img.freepik.com/free-vector/delivery-service-with-masks-concept_23-2148497067.jpg?w=996&t=st=1673203856~exp=1673204456~hmac=30a95a91854cea2bdf69c36801367a3762dc005276fe3fd8d655543e1a1bc448');
        image-orientation: flip;
        /* background-size: auto; */
        background-size: 100% 100%;
        background-color: whitesmoke;
        }
</style>

<div class="admintitle">
    <div>
    <h5 ><a href="../index.php" style="float: left; margin-left:20px; color:aliceblue;">Login As User</a></h5>
    <h5 ><a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">LogOut</a></h5>
    </div>
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">ADMIN DASHBOARD</h1>
</div>
<div align="center" style="margin-top:240px;">
<form style="position: centre ;color:lightblue;font-weight:bold;font-size:50px">
    
    <!-- <a href="insertdata.php">Insert Data</a><br><br> -->

    <!-- <a href="updatedata.php">Update Data</a><br><br> -->

    <a href="deletedata.php">Delete Data</a><br><br>

    <a href="deleteusers.php">Delete Users</a><br><br>

    <a href="./get_log.php">Users Log</a><br><br>
</form>

</div>
</body>
</html>
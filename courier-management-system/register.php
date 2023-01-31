<?php
require_once "dbconnection.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $fullname = $_POST['name'];
    $phn = $_POST['ph'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if($password==$confirm_password){

    $qry = "INSERT INTO `users` (`email`, `name`, `pnumber`) VALUES ('$email', '$fullname', '$phn')";
    $run = mysqli_query($dbcon,$qry);
    
    if($run==true){

        $psqry = "INSERT INTO `login` (`email`, `password`, `u_id`) VALUES ('$email', '$password',LAST_INSERT_ID() )";
        $psrun = mysqli_query($dbcon,$psqry);
        ?>  <script>
            alert('Registration Successfully :)'); 
            window.open('index.php','_self');
            </script>
        <?php
    }
    }else{
        ?>  <script>
            alert('Password mismatched!!'); 
            </script>
        <?php
    }

}   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <style>
        body
        {
        background-image:url('https://srbps.com/wp-content/uploads/2020/09/Best-Free-WordPress-Registration-Plugins.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
    </head>
    <body><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color:black">Register</h2>
                    <p>Please fill this form to create an account.</p>
                    <!-- <?php echo $success; ?>
                    <?php echo $error; ?> -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label>FULL NAME:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>PHONE NUMBER:</label>
                            <input type="number" name="ph" class="form-control" required>
                        </div>    
                        <div class="form-group">
                            <label>EMAIL ID:</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>    
                        <div class="form-group">
                            <label>PASSWORD:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>CONFIRM PASSWORD:</label>
                            <input type="password" name="confirm_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-danger" value="Register">
                        </div>
                        <p>Already have an account? <a href="index.php" style="color: red;">Login here</a>.</p>
                    </form>
                </div>
            </div>
            <p>🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐🚐</p>
            <p>⚠️ If the email Id is already registered it will not accept it⚠️</p>
        </div>    
    </body>
</html>
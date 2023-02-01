
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Navbar with Logo Image</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    .bs-example{
        margin: 0;
    }
</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="home.php" class="navbar-brand">
            <img src="https://cdn.dribbble.com/users/2454973/screenshots/15674675/media/2f7be8d826860f642dffb0856df9274f.jpg?compress=1&resize=1200x900&vertical=top" height="80" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="home.php" class="nav-item nav-link active">HOME</a>
                <a href="price.php" class="nav-item nav-link active">PRICE</a>
                <a href="courierMenu.php" class="nav-item nav-link active">COURIER</a>
                <a href="trackMenu.php" class="nav-item nav-link active">TRACK</a>
                
                <a href="profile.php" class="nav-item nav-link active">PROFILE</a>
                <a href="contactUS.php" class="nav-item nav-link active">CONTACT US</a>
                <!-- mailto:premkumar1215225@gmail.com -->
            </div>
            <div class="navbar-nav ml-auto">
                <a href="../admin/logout.php" class="nav-item nav-link active">Admin Page</a>
                <a href="../logout.php" class="nav-item nav-link">Log Out</a>
            </div>
        </div>
    </nav>
</div>
</body>
</html>
<?php include('footer.php'); ?>

  
<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }

?>
<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
</head>
<body>
    <table width='30%' border="5px solid" style="margin-top:30px;margin-left:auto ;margin-right:auto ;font-weight:bold;border-spacing: 5px 5px;border-collapse: collapse;">
    <tr style="background-color: #7FFFD4;font-size:30px">
    <th>WEIGHT (in Kg)</th><th>PRICE</th>
    </tr>
    <tr>
    <td>0-1</td><td>200</td>
    </tr>
    <tr>
    <td>1-2</td><td>250</td>
    </tr>
    <tr>
    <td>2-4</td><td>300</td>
    </tr>
    <tr>
    <td>4-5</td><td>350</td>
    </tr>
    <tr>
    <td>5-7</td><td>400</td>
    </tr>
    <tr>
    <td>7-above</td><td>500</td>
    </tr>
    </table>
    <h3 align="center" style="margin-top:20px;"> CHOOSE THE WEIGHT CATEGORY AND PAY AS PER:</h3>
    <h5 align="center" style="margin-top:20px;"> PAY TO THE BELOW UPI ID</h5>
    <div style="margin-left:45% ;margin-right:auto ;font-weight:bold;">
    <ol>
    <li>UPI: 123456789@okaxis</li>
    <li>GPay: keerthana@gmail.com</li>
    <li>PhonePay: 987654321</li>
    </ol>
    </div>
</body>
</html>
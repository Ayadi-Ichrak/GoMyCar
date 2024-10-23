<?php 
require_once "securite.php";
require_once "connection.php";



if($_POST){
    extract($_POST);

   
$req2 = "insert into driver values('', '$namedriver', '$dlnumber', 
 '$driverphone',
'$driveraddress', 
'$drivergender', 
 '$driveravailability',);";
echo $req2;
$result = mysqli_query($con, $req2);

if ($result) {
    $_SESSION['info'] = "Driver added successfully";
    header("location: admdriver.php");
    exit;
} 
else 
{
    $_SESSION['info'] = "Add failed";
    echo $req2;

}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<?php include "menu.php"?>

<body>

<div class="container">
    <form class="login-form ADD" method="POST">
        <h2  >Add Driver</h2>
        <label for="driver_name">Name </label>
<input type="text" id="driver_name" name="driver_name" placeholder="Name">
<label for="dl_number">Number </label>
<input type="text" id="dl_number" name="dl_number" placeholder="Number">
<label for="driver_phone">Phone </label>
<input type="number" id="driver_phone" name="driver_phone" placeholder="Driver Phone">
<label for="driver_address">Address</label>
<input type="text" id="driver_address" name="driver_address" placeholder="Driver Address">
<label for="driver_gender">Gender</label>
<input type="text" id="driver_gender" name="driver_gender" placeholder="Driver Gender">

		<label>Availability</label>
        <input type="radio" value="yes" name="driver_availability" >YES
        <input type="radio" value="no" name="driver_availability" >NO
        <div class="btns"><button type="submit">Edit</button>
        <a href="cars.php" >back</a></div>
        <?php if (!empty($info)) echo "<span>" . $info . "</span>"; ?>

    </form>
</div>
</div>
</body>

</html>
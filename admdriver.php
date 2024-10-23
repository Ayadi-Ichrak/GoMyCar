<?php 
require_once "connection.php";
require_once "securite.php";
if (isset($_SESSION['info'])) {
    $info = $_SESSION['info'];
    unset($_SESSION['info']); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--fav icon-->
    
   <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">
	<!--font-->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>Driver</title>
</head>
<body>
<?php include "menu.php"?>

<section class="book">
<h1 class="t">driver</h1>
<?php if (!empty($info)) echo '<span class="msg">' . $info . "</span>"; ?>
<?php  
$req = "SELECT * FROM driver; ";
$result1 = mysqli_query($con,$req);

if (mysqli_num_rows($result1) > 0) {
?>
<div class='tab'>
<table>
<tr class="champ">
<th>ID</th>
<th>Name</th>
<th>Number</th>
<th>Phone</th>
<th>Address</th>
<th>Gender</th>
<th>Availability</th>
<th colspan="2">Action</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($result1)) {
?>
<tr>
<td><?php echo $row["driver_id"]; ?></td>
<td><?php echo $row["driver_name"] ?></td>
<td><?php echo $row["dl_number"]; ?></td>
<td><?php echo $row["driver_phone"]; ?> </td>
<td> <?php echo $row["driver_address"]; ?> </td>
<td> <?php echo $row["driver_gender"]; ?> </td>
<td> <?php echo $row["driver_availability"]; ?> </td>
<td align="center"><a onclick="return confirm('Are you sure you want to edit this driver ?')" href="editdriver.php?id=<?php echo ($row["driver_id"]);?>"><img class="action" src="img/modif.png" alt=""></a></td>
<td align="center"><a onclick="return confirm('Are you sure you want to delete this driverr ?')" href="deletedriver.php?id=<?php echo($row["driver_id"]); ?>"><img class="action"src="img/supp.png" alt=""></a></td>
                   
</tr>
<?php        } ?>
    </table></div>
     
<?php } else {
?>
<div>
<h1 >You haven't any driver</h1>
<p>  </p>
</div>

<?php
} ?>
</section>

</body>
</html>
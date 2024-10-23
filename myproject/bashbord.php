<?php 
require_once "securite.php";
require_once "connexion.php";
$req1="select * from filiere";
$req2="select * from student";
$res1=mysqli_query($con,$req1);
$res2=mysqli_query($con,$req2);
$count1=mysqli_num_rows($res1);
$count2=mysqli_num_rows($res2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="principal">
        <?php include "menu.php"?>
        <div class="content">
        <div class="row">
            <div class="col"><h2>filières</h2><h3><?php echo $count1;?></h3></div>
            <div class="col"><h2>etudients</h2><h3><?php echo $count2;?></h3></div>
        </div>
        </div>
    </div>
</body>
</html>
<?php
require_once "connexion.php";
session_start();
if($_POST){
    extract($_POST);
    if (empty(trim($login))||empty(trim($password))){
        $_SESSION['info']="champ(s) vide (s) ....";
        header("location:index.php");
        exit;

    }
    else{
        $login=trim($_POST['login']);
        $password=trim($_POST['password']);
        $query="select * from users where customer_username='$login' and password=md5('$password')";
        $rslt=mysqli_query($con, $query);
        $count=mysqli_num_rows($rslt);
        if ($count==1){
            $row=mysqli_fetch_assoc($rslt);
            $_SESSION['user']=$row;
            header("location:userho.php");
            exit;

        }
        else{
            $_SESSION['info']="login/password....";
            header("location:index.php");
            exit;

        }
    }
}
$info="";
if (isset($_SESSION['info'])){
    $info=$_SESSION['info'];
}
unset($_SESSION['info']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<form  method="POST" class="login-form">
    <h2>connexion</h2>
    <label for="">nom utilisateur</label>
    <input type="text" name="login" >
    <label for="">Mot de passe</label>
    <input type="password" name="password" >
    <button type="submit">se connecter</button>
    <?php
    if(!empty($info)){
        echo"<span>$info</span>";
    }
    ?>
</body>
</html>
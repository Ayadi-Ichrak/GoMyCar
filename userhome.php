
<?php 
require_once "connection.php";
require_once "securite.php";
$nom=$_SESSION['user']['customer_name'];

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


    <title>website adventure</title>

</head>
<body>
   <!-- <nav class="nav"  >
        <a href="#" class="nav__logo"><i class="bi bi-car-front-fill"></i>
            GoMyCar</a>
        <div class="nav-links" id="nav-links">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link">home</a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">about us</a>
                </li> 
                <li class="nav__item">
                    <a href="#start" class="nav__link">get started</a>
                </li>
                <li class="nav__item">
                    <a href="#pop" class="nav__link">popular</a>
                </li>

               
                <li class="nav__item">
                    <a href="#cars" class="nav__link">Cars</a>
                </li>
                <li>
                    <a class="HV" href="#"><?php echo $nom; ?>  ▾</a>
                    <ul class="dropdown">
                        <li><a href="#">My bookings</a></li>
                        <li><a href="#">Return now</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </li>
          

            </ul>
           


        </div>
      
      
        <div class="btn">
            <div class="loginbtn" >
            <a href="logout.php"><i class="bi bi-arrow-right-circle"></i></a>
            </div >
            <div class="menubtn" id="menu">
              <hr class="one">
              <hr class="two">
              <hr class="three">
            </div>
        </div>
        </nav
        <nav class="nav"  >
        <a href="#" class="nav__logo"><i class="bi bi-car-front-fill"></i>
            GoMyCar</a>
        <div class="nav-links" id="nav-links">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.php" class="nav__link">home</a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">about us</a>
                </li> 
                <li class="nav__item">
                    <a href="#start" class="nav__link">get started</a>
                </li>
                <li class="nav__item">
                    <a href="#pop" class="nav__link">popular</a>
                </li>

               
                <li class="nav__item">
                    <a href="#cars" class="nav__link">Cars</a>
                </li>
                <li>
                    <a class="HV" href="#">  ▾</a>
                    <ul class="dropdown">
                        <li><a href="#">My bookings</a></li>
                        <li><a href="#">Return now</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </li>
          

            </ul>
           


        </div>
      
      
        <div class="btn">
            <div class="loginbtn" >
            <a href="logout.php"><i class="bi bi-arrow-right-circle"></i></a>

            </div >
            <div class="menubtn" id="menu">
              <hr class="one">
              <hr class="two">
              <hr class="three">
            </div>
        </div>
        </nav>-->
        <?php include "menu.php"?>

<section>
    <div class="Welcome">
        <div class="conWel">  <h1>Welcome</h1>
            <h2><?php echo $nom; ?> </h2></div>
      

    </div>
    <div class="banner-right">

        <img src="img/banner-right.png" alt="">

    </div>
</section> 

           
            
          




   
    </body>
    </html>
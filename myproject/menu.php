<?php
$nom=$_SESSION['user']['nom'];
$prenom=$_SESSION['user']['prenom'];
?>
<nav><h4><?php echo $nom.' '.$prenom.'<br>'.'connecté' ?></h4> 
<ul>
    <li><a href="" class="active">Acceuil</a></li>
    <li><a href="filieres.php">Filieres</a></li>
    <li><a href="etudiant.php">Etudiants</a></li>
    <li><a href="logout.php">Deconnexion</a></li>
</ul>

</nav>
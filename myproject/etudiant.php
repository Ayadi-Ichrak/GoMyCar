<?php 
require_once "securite.php";
require_once "connexion.php";
$req="select numcin,nom,prenom,email,sexe,codeFiliere
from student s , filiere f
where s.classe=f.idFiliere";
$res=mysqli_query($con,$req);
$nb=mysqli_num_rows($res);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>etudiant</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="principal">
        <?php include "menu.php"?>
        <div class="content">
            <fieldset>
                <legend>
                    <h3>Liste des étudiants</h3>
                </legend>
                <div class="top">
                    <a href="">nouveau</a>
                    <from action="">
                    <input type="text" class="search" placeholder="chercher....">
                    <button type="submit">chercher</button>
                </div>
                <?php if ($nb==0){
                    echo "<tr> <th colspan='7'> aucun étudiant dans la base </th></tr>";
                }
                else{ 
                ?>
                <table>
                    <tr>
                    <th>#</th>
                    <th>Nom & Prénom</th>
                    <th>Email</th>
                    <th>Sexe</th>
                    <th>Classe</th>
                    <th colspan="2">Action</th>
                    </tr>
                    <?php
                    while($lignes=mysqli_fetch_assoc($res)){

                    
                    ?>
                    <tr>
                        <td><?php echo $lignes['numcin'];?></td>
                        <td>  <?php echo $lignes['nom'].' '.$lignes['prenom'];?></td>
                        <td><?php echo $lignes['email'];?></td>
                        <td><?php echo $lignes['sexe'];?></td>
                        <td><?php echo $lignes['codeFiliere'];?></td>
                        <td align="center"><img src="images/edit.png" alt=""></td>
                        <td align="center"><a href="deleteEtudiant.php?id=<?php echo $lignes['numcin'];?>"><img src="images/delete.png" alt=""></a></td>
                        
                    </tr>
                    <?php
                         }
                        }
                    
                    ?>

                </table>
            </fieldset>


        </div>
    </div>
</body>
</html>
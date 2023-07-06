<h1>Connexion à la base de données test23</h1>
<?php 

error_reporting(-1);
// 1 - Connexion à la base de données
// mysqli_connect : serveur / utilisateur phpmyadmin / mot de passe phpmyadmin / nom bdd / port
    $bdd = mysqli_connect('localhost','root','','test23');
// 2 - Ecrire la requete sql (SELECT * FROM nom_table)

    $sql = 'SELECT * FROM users';

// 3 - Envoi de la requete

    $resultat = $bdd -> query($sql);

// 4 - Créer une boucle pour aller chercher toutes les lignes de notre table.

    ?>

    <table>
         

     <?php    
    while($data= mysqli_fetch_array($resultat)){

        // 5 - Afficher les utilisateurs récupérés par la boucle.    
       
      
        
        
        echo '<tr><td>'.$data['nom'].'</td> '
            .'<td>'.$data['prenom'].'</td></tr> '
            .'<tr><td>'.$data['email'].'</td> '
            .'<td>'.$data['telephone'].'</td></tr> '
            .'<tr><td>'.$data['adresse'].'</td> '
            .'<td>'.$data['code_postal'].'</td> '
            .'<td>'.$data['ville'].'</td> </tr>';

    }

    ?>
    
    </table>

    <?php
// 6 - Fermer la connexion
    mysqli_close($bdd);
?>





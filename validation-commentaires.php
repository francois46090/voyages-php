<?php
// Validation du formulaire pour l'ajout des commentaires sur la page details-voyage.
// 1 - Créer les variables, vérifier et récupérer le contenu des champs de notre formulaire
// Champ nom
if(isset($_POST['nom']) AND $_POST['nom'] != NULL){
    $nom= $_POST['nom'];
}
else{ $nom='';}

// Champ prenom
if(isset($_POST['prenom']) AND $_POST['prenom'] != NULL){
    $prenom=$_POST['prenom'];
}
else{$prenom='';}

// Champ email
if(isset($_POST['email']) AND $_POST['email'] != NULL){
    $email=$_POST['email'];
}
else{$email='';}

// Champ sujet
if(isset($_POST['sujet']) AND $_POST['sujet'] != NULL){
$sujet= $_POST['sujet'];

}

else{$sujet='';}

// Champ commentaire
if(isset($_POST['commentaire']) AND $_POST['commentaire'] != NULL){
$commentaire=$_POST['commentaire'];
}

else{$commentaire='';}
// 2- On se connecte à la base de données

$bdd= mysqli_connect('localhost','root','','voyages');

if(mysqli_connect_errno()){
    printf("Echec de la connexion : %s",mysqli_connect_errno());
    exit();
}

// 3 - Ecrire la requete sql insert

$sql = "INSERT INTO commentaires (nom,prenom,email,sujet,commentaire) VALUES('$nom','$prenom','$email','$sujet','$commentaire')";

// 4 - Insertion des données dans la table

$resultat = $bdd ->query($sql) or die('Erreur dans votre requete '.$sql.' '.mysqli_errno($sql));

// 5 - Affichage du résultat

echo '<script>
        alert("Votre commentaire a bien été ajouté");
        window.location="details-voyage.php";
    </script>';

// 6 - Fermeture de la connexion mysqli

mysqli_close($bdd);
?>
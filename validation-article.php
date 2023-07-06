<?php 

// Validation du formulaire afin d'ajouter des articles dans la base de données.

// 1 - Vérifier et récupérer le contenu des champs de notre formulaire
// Champ titre
if(isset($_POST['titre']) AND $_POST['titre'] != NULL)
{    // instructions
    $titre = $_POST['titre'];
}
else{
    $titre='';}

// Champ description
if(isset($_POST['description']) AND $_POST['description'] != NULL)
{    // instructions
    $description = $_POST['description'];
}
else{
    $description='';}

// Champ tarif

if(isset($_POST['tarif']) AND $_POST['tarif'] != NULL)
{
    $tarif = $_POST['tarif'];
}
else{
    $tarif = '';
}

// Champ nombre de jours
if(isset($_POST['jour']) AND $_POST['jour'] != NULL)
{
    $jour = $_POST['jour'];
}
else{
    $jour = '';
}
// Champ nombre de nuits
if(isset($_POST['nuit']) AND $_POST['nuit'] != NULL)
{
    $nuit = $_POST['nuit'];
}
else{
    $nuit = '';
}
// Champ nombre de personnes
if(isset($_POST['personne']) AND $_POST['personne'] != NULL)
{
    $personne = $_POST['personne'];
}
else{
    $personne = '';
}
// Champ lieu
if(isset($_POST['lieu']) AND $_POST['lieu'] != NULL)
{
    $lieu = $_POST['lieu'];
}
else{
    $lieu = '';
}
// Champ programme
if(isset($_POST['programme']) AND $_POST['programme'] != NULL)
{
    $programme = $_POST['programme'];
}
else{
    $programme = '';
}
// Champ commentaire
if(isset($_POST['commentaire']))
{
    $commentaire = $_POST['commentaire'];
}
else{
    $commentaire = '';
}
// Champ image

if(isset($_POST['image']) AND $_POST['image'] != NULL)
{
    $image = $_POST['image'];

}
else{
    $image = '';
}

// 2- On se connecte à la base de données

$bdd = mysqli_connect('localhost','root','','voyages');

if(mysqli_connect_errno()){
    printf("Echec de la connexion : %s",mysqli_connect_errno());
    exit();
}
// 3 - Ecrire la requete sql

$sql = "INSERT INTO sejours (titre,description_voyages,n_jours,n_nuits,n_personnes,lieu,image_voyages,programme,commentaire,tarif) VALUES ('$titre','$description','$jour','$nuit','$personne','$lieu','$image','$programme','$commentaire','$tarif')";

// 4 - Insertion des données dans la table

$resultat = $bdd -> query($sql) or die('Erreur de requete'.$sql.' '.mysqli_errno($sql));

// 5 - Affichage du résultat

echo '<script type="text/javascript">
        alert("Votre article a bien été ajouté");
        
        window.location = "index.php";

      </script>';


// 6 - Fermeture de la connexion mysqli

mysqli_close($bdd);









?>
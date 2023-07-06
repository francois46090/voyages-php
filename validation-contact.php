<?php
// 1 - Création de messages types

$message_erreur= 'Erreur, les champs suivants doivent être oblitoirement remplis';
$message_ok='votre message a bien été envoyé';
$message= $message_erreur;
// 2 - Définir des CONSTANTES (variables qu'on ne peut pas modifiées)
// expediteur, sujet

    define('MAIL_EXPEDITEUR','direction@formation31.fr');
    define('MAIL_SUJET','Contact site de voyages');


// 3 - Vérifier les champs du formulaire

if(empty($_POST['nom'])){ $message.=' : Le champ nom est vide <br>';}
if(empty($_POST['email'])){ $message.=' : Le champ email est vide <br>';}
if(empty($_POST['message'])){ $message.=' : Le champ message est vide <br>';}

// 4 - Ajouter une sécurité pour vérifier que les champs sont bien remplis

// si le message final est + long que le message d'erreur de départ ($message_erreur + champ vide)
// strlen = string lenght (longueur de chaines de caractère)
    if(strlen($message)> strlen($message_erreur)){
    // Il y a une erreur, on affiche l'erreur
        echo $message;
    }


    else{
// si c'est l'inverse, im n'y a pas d'erreur, donc en envoie l'email.

        // on récupère les données des champs
        
        foreach($_POST as $index => $valeur){

            // instructions
            
// 5- récupérer les contenu des champs (on enlèvera les espaces et les caractères d'échappement)

            $$index=stripslashes(trim($valeur)); 
            
        }
    }
// 6 - Préparer l'entete de l'email (version, from, Reply to type de contenu, version...)
    $mail_entete="MIME-Version : 1.0\r\n";
    $mail_entete.="From: {$_POST['nom']}"."<{$_POST['email']}>\r\n";       
    $mail_entete.= 'Reply-To:'.$_POST['email']."\r\n";
    $mail_entete.='Content-Type: text/plain;charset="UTF-8"';
    $mail_entete.= "\r\nContent-Transfer-Encoding:8bit\r\n";
    $mail_entete.= 'X-Mailer:PHP/'.phpversion()."\r\n";

// 7 Préparer le corps de l'email (message, sujet, message)
    $mail_corps= "Message de  :  $nom \r\n";
    $mail_corps.="Email : $email\r\n";
    $mail_corps .= "message : $message\r\n";

// 8 - L'envoi du mail
if(mail(MAIL_EXPEDITEUR,MAIL_SUJET,$mail_corps,$mail_entete)){
    // l'email est envoyé : redirection

    echo '
        <script>
            alert("Votre message a bien été envoyé");
            window.location = contact.php;
        </script>    
    ';
}

// l'email n'est pas envoyé => Erreur


else {

    echo 'Erreur : Votre message n\'a pas pu être envoyé !';
}


?>
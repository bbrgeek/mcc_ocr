
<?php
$dossier = 'upload/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 1000000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg','.JPG','.PNG','.JPEG','.JPG','.GIF');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     echo 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
else if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
{
     echo 'Upload effectue avec succes !';
}
else //Sinon (la fonction renvoie FALSE).
{
     echo 'Echec de l\'upload !';
}
header('Refresh: 2; url=index.php');
?>
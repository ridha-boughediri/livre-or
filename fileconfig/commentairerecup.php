<?php 

$getmess = $bdd->prepare("SELECT login,date,commentaire FROM commentaires INNER JOIN utilisateurs ON id_utilisateur=utilisateurs.id ORDER BY date DESC; ");
$getmess->execute();
// $getmessinfos = $getmess->fetchAll();
?>

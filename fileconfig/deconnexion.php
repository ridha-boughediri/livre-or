<?php



// Si j'appuie sur le button deconnexion...
if (isset($_POST['deconnexion'])) {
    // je supprime toute les session
    session_destroy();
    // ici redirection vers l'index pour ne plus etre sur la meme page et avoir des messages d'erreur
    header("Location: ../index.php");
}
?>
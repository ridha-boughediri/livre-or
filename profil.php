<?php
require('./fileconfig/startbdd.php');
require('./fileconfig/userrecup.php');



if (isset($_SESSION['id'])) {
    $getid = intval($_SESSION['id']);
    $requser = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();

    if (isset($_POST['update'])) {


        $login = htmlspecialchars($_POST["login"]);
        $passe = sha1($_POST["password"]);

        if (isset($_POST["login"]) && !empty($_POST["login"])|| (isset($_POST["password"]) && !empty($_POST["password"]))) {
            $updateusers = $bdd->prepare("UPDATE utilisateurs SET login=?, password=? WHERE id=?");
            $updateusers->execute(array($login,$passe, $_SESSION['id']));
            header("Location: ./profil.php");
        }
    }
}
// afficher le lien si l'user est admin
if (isset($recupinfos['login']) and $recupinfos['login'] == 'admin') {
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFIL</title>
</head>

<body>

    <?php require("./header.php");

    ?>

    <div class="container2">
        <div class="item2">

            <div class="container">
                <h2>Quelques informations sur vous : </h2>
                <form action="" method="post">
                    <h2>ID :</h2>
                    <input type="text" name="id" id="" value=" <?php echo $userinfo['id'] ?>">

                    <h2>E-Mail</h2>
                    <input type="text" name="login" id="" value="<?php echo $userinfo['login'] ?>">
                    <h2>Mot de Passe</h2>
                    <input type="password" name="password" id="" value=" <?php echo $userinfo['password'] ?>">


                    <input type="submit" name="update" name="" value="modifier">
                    <?php if (isset($recupinfos['login']) and $recupinfos['login'] == 'admin') { ?>
                        <a href="admin.php">espace admin</a>

                    <?php } ?>


                </form>
            </div>
        </div>
    </div>
</body>

</html>
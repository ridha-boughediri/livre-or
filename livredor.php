<?php
require('./fileconfig/startbdd.php');
require('./fileconfig/userrecup.php');
require('./fileconfig/userall.php');
require('./fileconfig/userall.php');
require('./fileconfig/commentairerecup.php');
if (isset($_GET['supprimer']) and !empty($_GET['supprimer'])) {

        $supprime = intval($_GET['id']);
        $req = $bdd->prepare("DELETE FROM commentaires WHERE id = ?");
        $req->execute(array($supprime));
        header("Location: ./admin.php");
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="./css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashbord</title>
    </head>

    <body>


    <?php require("./fileconfig/header.php");  

?>


        <div class="container">
            <div class="item2">

<img src="img/vue-generale-de-marseille_1920x600.jpg" alt="">
                <table>
                    <thead>

                        <tr>
                            <th>date</th>
                            <th>commentaire</th>
                            <th>login</th>
                          


                        </tr>

                    </thead>
                    <tbody>

                        <?php while ($m =$getmess->fetch()) { 
                    
                           ?>
                            
                            <tr>
                                
                                <th><input type="text" name="date" id="" value="<?= $m["date"] ?>"></th>
                                <th><input type="text" name="commentaire" id="" value="<?= $m["commentaire"] ?>"></th>
                                <th><input type="text" name="login" id="" value="<?= $m["login"] ?>"></th>
                                <!-- <th>
                                    <form action="#" method="get"> <input type="hidden" name="id" value="<?php echo $m["id"]; ?>"><input name="supprimer" type="submit" value="supprimer"> </form>
                                </th> -->
                  
                            

                                
                              

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </body>

    </html>




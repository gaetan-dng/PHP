<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo7</title>
    </head>
    <body>

        <form action="exo7.php" method="session">
            votre text : <input type="text" id="text1" name="Ntext">
                         <input type="submit" name="envoie">
                         <input type="submit" id="poubelle">
        </form> 

        <?php

            session_start();
            echo "demarrage session OK <br>";

            if (!isset($_SESSION['text1'])) {

                echo "la variable est:" . $_SESSION['text1'];

            }else{

                echo "pas de variable detectee";

            }

            if (getElemetByid("poubelle") = true) {
                
                session_destroy();

            }
            
               
        ?>


    </body>
</html>
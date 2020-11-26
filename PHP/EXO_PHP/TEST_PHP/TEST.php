<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TEST</title>
    </head>

    <body>

        <?php

            echo "<iframe src='https://www.youtube.com/watch?v=VRm7oRCTkjE' style='height: 500px; width: 50%;'> </iframe>";                                             
                                         

            for ($i = 1; $i <= 10; $i++) {        
                
                if ($i == 5) {

                    echo "<div> moitier $i </div>";

                }else{

                    echo "<p> $i </p>";

                }
            }

        ?>

    </body>

</html>
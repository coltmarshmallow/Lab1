<!DOCTYPE html>
<html>
    <head>
        <body>
            <p>
                <?php
                    $provisionedActivity = array("Specs" , "Drugs", "Rock and Roll");

                    $provisionedActivity[1] = "hugs";

                    foreach($provisionedActivity as $x){
                        print "<p>$x</p>";
                    }

                    unset($provisionedActivity[2]);

                    foreach($provisionedActivity as $x){
                        print "<p>$x</p>";
                    }

                ?>
            </p>
        </body>
    </head>
</html>

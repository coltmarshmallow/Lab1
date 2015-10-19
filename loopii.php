<!DOCTYPE html>
    <html>
    <head>
        <body>
            <p>
                <?php


                $wantedgood = "mugs";

                switch ($wantedgood) {
                    case "specs":
                        echo "<p>You have to be 16 to buy specs</p>";
                        break;
                    case "mugs":
                        echo "<p>You have to be 18 to buy mugs</p>";
                        break;
                    case "sausage rolls":
                        echo "<p>You have to be 21 to buy sausage rolls</p>";
                        break;
                }

                ?>
            </p>
        </body>
    </head>
</html>0
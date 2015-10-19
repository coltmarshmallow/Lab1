<!DOCTYPE html>
<html>
<head>
<body>
<p>
    <?php

        for ($i = 1; $i < 30; $i++){
            if ($i % 4 == 0){
                echo "<p>On</p>" . $i;
                echo "<p>Specs are available</p>";
                echo "<p>Sausage rolls are available</p>";
            } else if ($i % 3 == 0) {
                echo "<p>On</p>" . $i;
                echo "<p>Mugs are available</p>";
            } else if ($i % 2 == 0) {
                echo "<p>On</p>" . $i;
                echo "<p>Specs are available</p>";
            } else {
                echo "<p>On</p>" . $i;
                echo "<p>Nothing is available</p>";
            }
    }


    ?>
</p>
</body>
</head>
</html>

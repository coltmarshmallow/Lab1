<!DOCTYPE html>
<html>
    <head>
        <body>
            <p>
                <?php
                echo "Hello World \n";
                echo "Hello," . " " . "world" . "!\n";
                echo 5 * 7;

                $myname = "Frodo Baggins";
                $myage = 111;
                echo "My name is " . $myname . " and I am " . $myage;

                $name = "Edgar";
                if ($name == "Simon"){
                    print "I know you!";
                } else {
                    print "Who are you?";
                }

                $numberOfHobbits = 2;

                switch($numberOfHobbits) {
                    case 1:
                        echo "1 sad hobbit";
                        break;
                    case 2:
                        echo "2 happy hobbits";
                        break;
                    case 3:
                        echo "3 hobbits are a crowd";
                        break;
                    default:
                        echo "All the hobbits have gone home";
                }

                ?>
            </p>
        </body>
    </head>
</html>

<?
/**
 * Created by PhpStorm.
 * User: 1301657
 * Date: 19/10/2015
 * Time: 14:28
 */
?>
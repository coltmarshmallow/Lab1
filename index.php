<!DOCTYPE html>
<html>
    <head>
        <body>
            <p>
                <?php
                $pass = false;
                function makeTextInputField($name){
                        $text = ucfirst($name);
                        echo "
                            <label for='{$name}'>{$text}</label>
                            <input type='text' name'{$name}'/>
                        ";
                }


                echo "Hello World \n";#
                $username = "Josh";
                $password = "secrets";

                ?>
                <div = 'input'>
                    <?php
                        makeTextInputField('username');
                        makeTextInputField('password');


                    function passOrFail($username){
                        if ($username == makeTextInputField('username')){
                                $pass = true;
                                echo "success";
                        }
                    }

                    ?>
                </div>
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
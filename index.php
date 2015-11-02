<!DOCTYPE html>
<html>
    <head>
        <body>
            <p>
                <?php
                function makeTextInputField($name){
                        $text = ucfirst($name);
                        echo "
                            <label for='{$name}'>{$text}</label>
                            input type='text' name'{$name}'/>
                        ";
                }


                echo "Hello World \n";

                ?>
                <div = 'input'>
                    <?
                        makeTextInputField('username');
                        makeTextInputField('password');
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
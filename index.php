<?php
$cookie_name = "username";
$cookie_value = "jeril";
//set cookie
setcookie($cookie_name, $cookie_value, time()+1800);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cookies using php</title>
    </head>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])){
                echo 'Cookie '.$cookie_name.' is not set';
            }else{
                echo 'Cookie '.$cookie_name.' is set';
                echo '<br>Cookie value: '.$cookie_value;
            }
        ?>
    </body>
</html>

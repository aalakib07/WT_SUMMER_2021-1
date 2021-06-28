<?php
    $cookie_name = "user";
    $cookie_value = "Shahed";
    $cookie_name_2 = "user2";
    $cookie_value_2 = "Chowdhury";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie($cookie_name_2,$cookie_value_2,time()+(86400*30),'/');
?>

<html>
<body>
<?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }

    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie named'".$cookie_name_2."'is not set!";
    }else{
        echo "<br/>Cookie '" . $cookie_name_2 . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name_2];
    }
?>
</body>
</html>

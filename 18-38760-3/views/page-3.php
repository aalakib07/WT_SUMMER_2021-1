<?php
    session_start();
    foreach($_SESSION as $key=>$val){
        if($key == 'password')continue;
        echo $key.": ".$val."<br/><br/>";
    }
    echo "<a href='../controls/page-3-logout.php'>Log out</a>";

?>


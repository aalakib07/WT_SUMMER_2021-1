<?php 
    include ('controls/myActionPage.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post page</title>
</head>
<body>
    <form action="#" method="POST">
        <?= $required_msg ?><br>
        <label for="userName">Enter username: </label><br>
        <input type="text" name="uName" id="userName" autocomplete="off"><?= $name_required_msg ?><br>
        <label for="email">Enter email</label><br>
        <input type="email" name="email" id="email" autocomplete="off"><?= $email_required_msg ?><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

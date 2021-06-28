<?php
    include("../../controls/staff/login-validator.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff &copy Shahed</title>
</head>
<body>
    <h1>Staff Login</h1><hr>
    <p>
        <form action="" method="POST">
            <table>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" name="email" id="email"></td>
                    <td><?=$_SESSION['email-error']?></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id="password"></td>
                    <td><?=$_SESSION['password-error']?></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
                <tr>
                    <td>Not registered ?</td>
                    <td><a href="registration.php">Click here!</a></td>
                </tr>
                <tr>
                    <td><a href="../home.php">Go back</a></td>
                </tr>
            </table>
        </form>
    </p>
</body>
</html>
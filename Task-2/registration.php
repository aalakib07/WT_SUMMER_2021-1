<?php 
    include("controls/action.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <h1>Registration form</h1><hr>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fName" id="fName"><?= $fName_valid_msg ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email"><?= $email_valid_msg ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td>Comments:</td>
                <td><textarea name="comments" id="comments" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="selection" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="selection" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="selection" id="others">
                    <label for="others">Others</label>
                </td>
            </tr>
            <tr>
                <td>Please choose a hobby:</td>
                <td>
                    <input type="checkbox" name="hobbies" id="singing">
                    <label for="singing">Singing</label>
                    <input type="checkbox" name="hobbies" id="dancing">
                    <label for="dancing">Dancing</label>
                    <input type="checkbox" name="reading" id="reading">
                    <label for="reading">Reading</label>
                </td>
            </tr>
            <tr>
            <td></td>
                <td>
                    <input type="submit" value="Submit" name="btn">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

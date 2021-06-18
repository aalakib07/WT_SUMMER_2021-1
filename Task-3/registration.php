<?php
    include("controls/action.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <h1>Registration form</h1><hr>
        <table>
            <tr>
                <td>Full name:</td>
                <td><input type="text" name="fName"></td>
                <td><?=$name_error?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
                <td><?=$email_error?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
                <td><?=$password_error?></td>
            </tr>
            <tr>
                <td>Comments:</td>
                <td><textarea name="comments" cols="30" rows="5"></textarea></td>
                <td><?=$comment_error?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="selection" value="male" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="selection" value="female" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="selection" value="others" id="others">
                    <label for="others">Others</label>
                </td>
                <td><?= $gender_error ?></td>
            </tr>
            <tr>
                <td>Hobbies:</td>
                <td>
                    <input type="checkbox" name="singing" value="Singing" id="singing">
                    <label for="singing">Singing</label>
                    <input type="checkbox" name="dancing" value="Dancing" id="dancing">
                    <label for="dancing">Dancing</label>
                    <input type="checkbox" name="reading" value="Reading" id="reading">
                    <label for="reading">Reading</label>
                </td>
                <td><?=$hobby_error?></td>
            </tr>
            <tr>
                <td>Image:</td>
                <td>
                    <input type="file" name="image" id="image">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
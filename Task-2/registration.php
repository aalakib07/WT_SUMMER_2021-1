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
    <form action="#" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fName" id="fName"></td>
                <td><?= $fName_valid_msg ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email"></td>
                <td><?= $email_valid_msg ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" id="password"></td>
                <td><?= $password_valid_msg ?></td>
            </tr>
            <tr>
                <td>Comments:</td>
                <td><textarea name="comments" id="comments" cols="30" rows="5"></textarea></td>
                <td><?= $comment_valid_msg ?></td>
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
                <td><?= $gender_valid_msg ?></td>
            </tr>
            
            <tr>
                <td>Please choose a hobby:</td>
                <td>
                    <input type="checkbox" name="singing" id="singing">
                    <label for="singing">Singing</label>
                    <input type="checkbox" name="dancing" id="dancing">
                    <label for="dancing">Dancing</label>
                    <input type="checkbox" name="reading" id="reading">
                    <label for="reading">Reading</label>
                </td>
                <td><?= $hobbies_valid_msg ?></td>
            </tr>
            <tr>
                <td> <label for="file">Please choose a file:</label></td>
               <td><input type="file" id="file" name="fileToUpload"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit" name="btn-form-1">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

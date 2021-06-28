<?php
    include("../controls/page-1-check.php");

    if(!empty($_SESSION)){
        header('location:page-2.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
    <h1>Student's details </h1>
    <form action="" method="POST">
        <!-- First name -->
        <label for="fName">First name:</label>
        <input type="text" name="fName" id="fName"><br><br>
        <!-- Last name -->
        <label for="lName">Last name:</label>
        <input type="text" name="lName" id="lName"><br><br>
        <!-- Gender -->
        <label for="gender">Gender:</label><br>
        <input type="radio" name="gender" id="male" value="Male">
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="Female">
        <label for="female">Female</label>
        <input type="radio" name="gender" id="other" value="Other">
        <label for="other">Other</label><br><br>
        <label for="phone">Phone:</label>
        <!-- Phone -->
        <select name="phone" id="phone">
            <option value="+88">+88</option>
            <option value="+91">+91</option>
            <option value="+92">+92</option>
        </select>
        <input type="text" name="remaining-number"><br><br>
        <!-- Address -->
        <label for="address">Address</label><br>
        <textarea name="address" id="address" cols="30" rows="5"></textarea><br><br>
        <!-- Email -->
        <label for="email">Email:</label>
        <input type="text" name="email"><br><br>
        <!-- password -->
        <label for="password">Password:</label>
        <input type="password" name="password"><br><br>
        <!-- submit btn -->
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
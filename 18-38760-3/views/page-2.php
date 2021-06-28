<?php
    include("../controls/page-2-check.php");
    if(!empty($_SESSION['Do you agree with terms and conditions'])){
            header("location:page-3.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <form action="" method="post">
        <!-- HSC -->
        <label for="hsc">HSC result:</label>
        <input type="text" name="hsc" id="hsc"><br><br>
        <!-- SSC -->
        <label for="ssc">SSC result:</label>
        <input type="text" name="ssc" id="ssc"><br><br>
        <!-- Course -->
        <label for="courses">Choose a program that you want to enroll:</label>
        <select name="courses" id="courses">
            <option value="CSE">CSE</option>
            <option value="BBA">BBA</option>
            <option value="Economics">Economics</option>
        </select><br><br>
        <!-- Year -->
        <label for="year">Choose Year:</label>
        <select name="year" id="year">
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
        </select><br><br>
        <!-- Semester -->
        <label for="semester">Choose semester:</label>
        <select name="semester" id="semester">
            <option value="spring">spring</option>
            <option value="summer">summer</option>
            <option value="fall">fall</option>
        </select><br><br>
        <!-- Conditions -->
        <label for="conditions">Do you agree to terms and conditions</label><br>
        <input type="radio" name="condition" id="yes" value="Yes">
        <label for="yes">Yes</label>
        <input type="radio" name="condition" id="no" value="No">
        <label for="no">No</label><br><br>
        <!-- Button -->
        <input type="submit" value="Next">
    </form>
</body> 
</html>
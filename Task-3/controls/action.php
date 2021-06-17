<?php

    $name_error = "";
    $email_error = "";
    $password_error = "";
    $comment_error = "";
    $gender_error = "";
    $hobby_error = "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $full_name = $_REQUEST['fName'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $comment = $_REQUEST['comments'];
        $gender = isset($_REQUEST['selection']);

        // print_r($_REQUEST);
        

        // Name validation.
        if(empty($full_name)){
            $name_error = "* Name is required";
        }else if(strlen($full_name)<5){
            $name_error = "* Name must be more than 5 characters long.";
        }

        // Email validation.
        if(empty($email)){
            $email_error = "* Email is required";
        }else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
            $email_error = "* Invalid email.";
        }

        // Password validation.
        if(empty($password)){
            $password_error = "* Password is required";
        }else if(strlen($password)<5){
            $password_error = "* Weak password";
        }

        // Comment validation.
        if(empty($comment)){
            $comment_error = "* Comment is required";
        }

        // Gender validation.
        if(!$gender == 1){
            $gender_error = "* Gender is required";
        }

        // Hobby validation.
        if(isset($_REQUEST['singing']) != 1
            && isset($_REQUEST['dancing']) != 1
            && isset($_REQUEST['reading']) != 1){
                $hobby_error = "* Must select a hobby.";
        }

        // Image upload.
        $target_file = "files/".$_FILES["image"]["name"];
        if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){
            echo "<img src='".$target_file."'/><br/>";
            echo "File uploaded successfully.<br/>";
        }else{
            echo "File could not be uploaded";
        }


    }
?>

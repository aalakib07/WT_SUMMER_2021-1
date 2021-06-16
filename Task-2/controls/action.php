<?php 

    $fName_valid_msg = "";
    $email_valid_msg = "";
    $password_valid_msg = "";
    $comment_valid_msg = "";
    $gender_valid_msg = "";
    $hobbies_valid_msg = "";

    // Checking whether form 1 is submitted.
    if(isset($_POST['btn-form-1'])){

        $fname = $_REQUEST['fName'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $comment = $_REQUEST['comments'];     
         

        // Checking validity of name.
        if(empty($fname)){
            $fName_valid_msg = "* Name is missing";
        }else if(strlen($fname)<5){
            $fName_valid_msg = "* Name must be minimum 5 characters long";
        }

        // Checking validity of email.
        if(empty($email)){
            $email_valid_msg = "* Email is missing";
        }else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
            $email_valid_msg = "* Invalid email";
        }

        // Checking validity of password.
        if(empty($password)){
            $password_valid_msg = "* Password is missing";
        }else if(strlen($password)<8){
            $password_valid_msg = "* Weak password";
        }

        // Checking validity of comments.
        if(empty($comment) || strlen($comment)<5){
            $comment_valid_msg = "* Invalid comment.";
        }

        // Checking validity of gender.
        if(! isset($_REQUEST['selection'])){
            $gender_valid_msg = "* Gender is missing.";
        }

        // Checking validity of hobbies.
        if(!isset($_REQUEST['singing']) && !isset($_REQUEST['dancing']) && !isset($_REQUEST['reading'])){
            $hobbies_valid_msg = "* Select at least one hobby.";
        }

        // Uploading files.
        $target_file = "files/".$_FILES["fileToUpload"]["name"];
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
            echo "File uploaded<br/>";
            echo "<img src='".$target_file."'>";
        }else{
            echo "File could not be uploaded";
        }
    }

   
?>
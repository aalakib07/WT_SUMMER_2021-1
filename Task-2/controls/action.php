<?php 
    $fName_valid_msg = "";
    $email_valid_msg = "";
    // Checking whether request method is post.
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // Checking validity of name.
        if(empty($_REQUEST['fName'])){
            $fName_valid_msg = "* Name is missing";
        }else if(strlen($_REQUEST['fName'])<5){
            $fName_valid_msg = "* Name must be minimum 5 characters long";
        }
        // Checking validity of email.
        if(empty($_REQUEST['email'])){
            $email_valid_msg = "* Email is missing";
        }else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST['email'])){
            $email_valid_msg = "* Invalid email";
        }
        // Radio validation tbc->...
    }

?>
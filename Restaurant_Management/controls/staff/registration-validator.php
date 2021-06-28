<?php
    session_start();

    $_SESSION["name-error"] = "";
    $_SESSION["email-error"] = "";
    $_SESSION["password-error"] = "";
    $_SESSION["passwordR-error"] = "";
    $_SESSION["gender-error"] = "";
    $_SESSION["food-error"] = "";
    $_SESSION["success-msg"] = "";
    $_SESSION["image-error"] = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $full_name = $_REQUEST['fName'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $retyped_password = $_REQUEST['passwordR'];
        $gender = isset($_REQUEST["gender"]) == 1 ? $_REQUEST["gender"] : "";
        $designation = $_REQUEST["designation"];
        $target_file = "../../uploads/stuff/".$_FILES["image"]["name"];
        $fav_fruits = array();

        //----------------------------------------Name validation
        if(empty($full_name)){
            $_SESSION["name-error"] = "* Name field is missing";
        }else if(strlen($full_name)<5){
            $_SESSION["name-error"] = "* Name must be more than 5 characters long";
        }

        //----------------------------------------Email validation
        if(empty($email)){
            $_SESSION["email-error"] = "* Email field is missing";
        }else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
            $_SESSION["email-error"] = "* Invalid email";
        }

        //----------------------------------------Password validation
        if(empty($password)){
            $_SESSION["password-error"] = "* Password field is missing";
        }else if(strlen($password)<8){
            $_SESSION["password-error"] = "* Password must be more than 8 characters long";
        }

        //----------------------------------------Password retype validation
        if(empty($retyped_password)){
            $_SESSION["passwordR-error"] = "* Password field is missing";
        }else if($retyped_password != $password){
            $_SESSION["passwordR-error"] = "* Incorrect password";
        }

        //----------------------------------------Gender validation
        if(!isset($_REQUEST["gender"]) == 1){
            $_SESSION["gender-error"] = "* Must select a gender";
        }

        //----------------------------------------Food validation
        if(isset($_REQUEST['food-1']) != 1
            && isset($_REQUEST['food-2']) != 1 
            && isset($_REQUEST['food-3']) != 1){
                $_SESSION["food-error"] = "* Must select at least one food";
            }
        
        if(isset($_REQUEST['food-1']) == 1){
           array_push($fav_fruits,$_REQUEST['food-1']);
        }

        if(isset($_REQUEST['food-2']) == 1){
           array_push($fav_fruits,$_REQUEST['food-2']);
        }

        if(isset($_REQUEST['food-3']) == 1){
           array_push($fav_fruits,$_REQUEST['food-3']);
        }


        //----------------------------------------Image validation
        if(move_uploaded_file($_FILES['image']["tmp_name"],$target_file)){
            
        }else{
            $_SESSION["image-error"] = "* Failed to upload image";
        }

        // Redirection from here.
        if(strlen($_SESSION['name-error'])<1
           && strlen($_SESSION['email-error'])<1
           && strlen($_SESSION['password-error'])<1
           && strlen($_SESSION['passwordR-error'])<1
           && strlen($_SESSION['gender-error'])<1
           && strlen($_SESSION['food-error'])<1
           && strlen($_SESSION['image-error'])<1){

            $form_data = array(
                'Full name' => $full_name,
                'Email' => $email,
                'Password' => $password,
                'Gender' => $gender,
                'Designation' => $designation,
                'Favorite foods' => $fav_fruits,
                'Image-location' => $target_file
            );

            $existing_data = file_get_contents('../../controls/staff/data.json');
            $temp_json_data = json_decode($existing_data);
            $temp_json_data[] = $form_data;
            $json_data = json_encode($temp_json_data,JSON_PRETTY_PRINT);

            if(file_put_contents('../../controls/staff/data.json',$json_data)){
                $_SESSION["success-msg"] = "File successfully uploaded";
                header('location:login.php');
            }    
            
        }
        
    }

?>



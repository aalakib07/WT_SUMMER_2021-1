<?php

    $name_error = "";
    $email_error = "";
    $password_error = "";
    $comment_error = "";
    $gender_error = "";
    $hobby_error = "";
    $form_data = array();
    $stored_hobby = array();

    

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        // print_r($_REQUEST);

        $full_name = $_REQUEST['fName'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $comment = $_REQUEST['comments'];
        $gender = isset($_REQUEST['selection']);

        //---------------------------------------> Name validation.
        if(empty($full_name)){
            $name_error = "* Name is required";
        }else if(strlen($full_name)<5){
            $name_error = "* Name must be more than 5 characters long.";
        }else{
            $form_data['full-name'] = $full_name;
        }

        

        //---------------------------------------> Email validation.
        if(empty($email)){
            $email_error = "* Email is required";
        }else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
            $email_error = "* Invalid email.";
        }else{
            $form_data['email'] = $email;
        }
        

        //---------------------------------------> Password validation.
        if(empty($password)){
            $password_error = "* Password is required";
        }else if(strlen($password)<5){
            $password_error = "* Weak password";
        }else{
            $form_data['password'] = $password;
        }
        

        //---------------------------------------> Comment validation.
        if(empty($comment)){
            $comment_error = "* Comment is required";
        }else{
            $form_data['comment'] = $comment;
        }
        

        //---------------------------------------> Gender validation.
        if(!$gender == 1){
            $gender_error = "* Gender is required";
        }else{
            $form_data['gender'] = $_REQUEST["selection"];
        }
        
        //---------------------------------------> Hobby validation.
        if(isset($_REQUEST['singing']) != 1
            && isset($_REQUEST['dancing']) != 1
            && isset($_REQUEST['reading']) != 1){
                $hobby_error = "* Must select a hobby.";
        }

        if(isset($_REQUEST['singing']) == 1 ){
            array_push($stored_hobby,$_REQUEST['singing']);
        }

        if(isset($_REQUEST['dancing']) == 1){
            array_push($stored_hobby,$_REQUEST['dancing']);
        }

        if(isset($_REQUEST['reading']) == 1){
            array_push($stored_hobby,$_REQUEST['reading']);
        }


        $form_data['hobbies'] = $stored_hobby;

        //---------------------------------------> Image upload.
        $target_file = "files/".$_FILES["image"]["name"];
        if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){
            $form_data['img'] = $target_file;
            echo "<img src='".$target_file."'/><br/>";
            echo "<br/>File uploaded successfully.<br/>";
        }else{
            echo "<br/>File could not be uploaded";
        }

        // Putting data into json file.
        $existing_data = file_get_contents('data.json');
        $temp_json_data = json_decode($existing_data);
        $temp_json_data[] = $form_data;
        $json_data = json_encode($temp_json_data, JSON_PRETTY_PRINT);

        if(file_put_contents('data.json',$json_data)){
            echo "<br/>Data Successfully saved";
        }else{
            echo "<br/>Failed to save data";
        }
        
        // Reading from json file.
        $existing_data = file_get_contents('data.json');
        $my_data = json_decode($existing_data);
        foreach($my_data as $myObj){
            echo "<br/>";
            foreach($myObj as $key => $value){
                echo "<br/>";
                echo $key." => ";
                print_r($value);
                
            }
            
        }

    }
?>

<?php
    session_start();
    $success_msg = isset($_SESSION['success-msg']) == 1 ? $_SESSION['success-msg'] : '';
    echo $success_msg;
    session_destroy();

    session_start();
    $_SESSION['email-error'] = "";
    $_SESSION['password-error'] = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

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


        if(strlen($_SESSION['email-error'])<1 && strlen($_SESSION['password-error'])<1){
            
            $existing_data = file_get_contents('../../controls/staff/data.json');
            $temp_json_data = json_decode($existing_data);

            if(!empty($temp_json_data)){
                foreach($temp_json_data as $obj){
                    
                    if($obj->{'Email'} == $email && $obj->{'Password'} == $password){

                        
                        $_SESSION['full_name'] = $obj->{'Full name'};
                        $_SESSION['email'] = $obj->{'Email'};
                        $_SESSION['password'] = $obj->{'Password'};
                        $_SESSION['gender'] = $obj->{'Gender'};
                        $_SESSION['designation'] = $obj->{'Designation'};
                        $_SESSION['favorite food'] = $obj->{'Favorite foods'};
                        $_SESSION['image location'] = $obj->{'Image-location'};

                        header('location:view.php');
                        break;


                    }
                    
                
                    
                }
            }

            

        }



    }

     
    

?>
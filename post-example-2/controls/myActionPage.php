 <?php 
        $required_msg = '';
        $name_required_msg = '';
        $email_required_msg = '';

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $name_valid = $_REQUEST['uName'];
            $email_valid = $_REQUEST['email'];
            
            // Form validating code:
            if($name_valid == '' && $email_valid == ''){
                $required_msg = "All fields are required";
            }else if($email_valid == ''){
                $email_required_msg = "Email is required";
            }else if($name_valid == ''){
                $name_required_msg = "Name is required";
            }
        }

?>
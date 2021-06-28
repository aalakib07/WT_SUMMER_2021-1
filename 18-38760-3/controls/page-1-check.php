<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

            if(!empty($_REQUEST['fName']) && !empty($_REQUEST['lName'])
                && isset($_REQUEST['gender']) == 1 && !empty($_REQUEST['phone']) 
                && !empty($_REQUEST['remaining-number']) && !empty($_REQUEST['address'])
                    && !empty($_REQUEST['email']) && !empty($_REQUEST['password'])){
                        $_SESSION['Firstname'] = $_REQUEST['fName'];
                        $_SESSION['Lastname'] = $_REQUEST['lName'];
                        $_SESSION['Gender'] = $_REQUEST['gender'];
                        $_SESSION['Phone'] = $_REQUEST['phone'].$_REQUEST['remaining-number'];
                        $_SESSION['Address'] = $_REQUEST['address'];
                        $_SESSION['Email'] = $_REQUEST['email'];
                        $_SESSION['password'] = $_REQUEST['password'];
                    }
    }
    
    
?>
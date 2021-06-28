<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_REQUEST['hsc']) && !empty($_REQUEST['ssc']) 
            && isset($_REQUEST['courses']) == 1 && isset($_REQUEST['year']) == 1
                && isset($_REQUEST['semester']) == 1 && isset($_REQUEST['condition']) == 1){
                    $_SESSION['HSC Results'] = $_REQUEST['hsc'];
                    $_SESSION['SSC Results'] = $_REQUEST['ssc'];
                    $_SESSION['Program Interested'] = $_REQUEST['courses'];
                    $_SESSION['Year'] = $_REQUEST['year'];
                    $_SESSION['Semester'] = $_REQUEST['semester'];
                    $_SESSION['Do you agree with terms and conditions'] = $_REQUEST['condition'];
            }

            
    }
?>
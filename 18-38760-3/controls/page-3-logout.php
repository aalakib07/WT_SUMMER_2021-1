<?php
    session_start();
    if(session_destroy()){
        header("Location: ../views/page-1.php"); // Redirecting To Home Page
    }
?>
<?php
    session_start();
    require_once('../model/userModel.php');
    $email = $_SESSION['email'];
    $account = userAccount($email);
    if($account=='personal'){
        header('location: ./personal/personal.php');
    }
    else if($account=='business'){
        header('location: ./business/business.php');
    }
?>

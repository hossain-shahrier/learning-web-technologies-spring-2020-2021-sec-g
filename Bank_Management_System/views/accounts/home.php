<?php
    session_start();
    require_once('../../model/userModel.php');
    $email = $_SESSION['email'];
    $id = userId($email);
    $balance = userBalance($email);
    if($_SESSION['account'] =='business'){
        $_SESSION['id'] = $id;
        $_SESSION['balance'] = $balance;
        header('location: ./business/dashboard.php');
    }
    else if($_SESSION['account'] =='personal'){
        header('location: ./personal/dashboard.php');
    }
    else{
        header('location: ./admin/dashboard.php');
    }
?>
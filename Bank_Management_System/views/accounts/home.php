<?php
    session_start();
    require_once('../../model/userModel.php');
    
    $email =    $_SESSION['email'];
    $account    = userAccount($email);
    $username   = userName($email);
    $id         = userId($email);
    $active     = activeStatus($email);
            
    $balance = userBalance($email);
    if($account =='business'){
        $_SESSION['account'] = $account;
        $_SESSION['id'] = $id;
        $_SESSION['balance'] = $balance;
        header('location: ./business/dashboard.php');
    }
    else if($account =='personal'){
        header('location: ./personal/dashboard.php');
    }
    else{
        header('location: ./admin/dashboard.php');
    }
?>

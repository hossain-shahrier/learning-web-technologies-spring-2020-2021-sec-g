<?php
    session_start();
    if(isset($_POST['submit'])){
        if(!empty($_POST['account'] )){

            $account = $_POST['account'];
            if($account == 'personal'){
                $_SESSION['current_account'] =$account;
                header('location: ../views/personal/personalSignup.html');
            }
            else if($account == 'business')
                $_SESSION['current_account'] =$account;
                header('location: ../views/business/businessSignup.html');
            }

        }
        else{
            echo "No account selected. Please select an account.";
        }
?>
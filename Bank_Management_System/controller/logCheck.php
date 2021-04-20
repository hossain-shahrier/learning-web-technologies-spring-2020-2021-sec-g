<?php
    session_start();
    require_once('../model/userModel.php');
    if(isset($_POST['submit'])){
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        if($email == "" || $password=="" ){
            echo "Null Input";
        }
        else{
            $status     = validateUser($email,$password);
            
            // 
            if($status){  
                $username   = userName($email);
                $id         = userId($email);              
                $_SESSION['flag']       = true;
                $_SESSION['username']   = $username;
                $_SESSION['email']      = $email;
                $_SESSION['id']         = $id;

                $username   = userName($email);
                $id         = userId($email);
                $active     = activeStatus($email);
            
                if($active){
                    if($_SESSION['flag'] == true){
                        header('location: ../views/accounts/home.php');
                    }
                    else{
                        echo "Something went wrong, Try Again...";
                    }    
                }
                else{
                    echo "Your Account isn't Active. Please Contact with the Administration.If you are new user wait for 32 hours";
                }
                
            }
            else{
                echo "Invalid User...";
            }
        }
    }


?>
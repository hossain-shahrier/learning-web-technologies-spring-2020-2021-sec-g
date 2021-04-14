<?php
    session_start();
    // Decaring Database.
    require_once('../model/userModel.php');
    if(isset($_POST['submit'])){
		
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $accounts = $_POST['accounts'];
        $active = false;

        // Check if Inputs are Null or Not
        if($username == "" || $password == "" || $email == ""){
                echo "Null value found...";
        }
        // If inputs are not Null
        else{
            if(strlen($username)>3){
                if(strlen($password>4)){
                    // Check if password and re-password are same
                    if($password == $repassword){
                    
                        $user = [	
                            'username'	=> $username, 
                            'password'	=> $password, 
                            'email'		=> $email, 
                            'account'	=> $accounts,
                            'active'    => $active
                        ];
                        // Calling Database Insert Operation Function
                        $status = insertUser($user);
    
                        // Insert Function will send Database Operation Status,If Status True.
                        if($status){
                            header('location: ../views/accounts/login.html');
                        }
                        // If Operation Failed.
                        else{
                            echo "error..try again";
                        }	
                    }
                    // If Password and re-password are not Same.
                    else{
                        echo "password & confirm password mismatch...";
                    }
                }
                else{
                    echo "Password must be more than 4 letters";
                }
            }
            else{
                echo "Username must be More than 3 letters";
            }
                
        }
    }
?>
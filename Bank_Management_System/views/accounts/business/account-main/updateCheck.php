<?php
    if(isset($_POST['submit'])){
		
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if Inputs are Null or Not
        if($username == "" || $password == "" || $email == ""){
                echo "Null value found...";
        }
        // If inputs are not Null
        else{
            if(strlen($username)>3){
                if(strlen($password>4)){
                    // Check if password and re-password are same                    
                        $user = [	
                            'username'	=> $username, 
                            'password'	=> $password, 
                            'email'		=> $email, 
                            'account'	=> $accounts,
                        ];
                        // Calling Database Insert Operation Function
                        $status = updateUser($user);
    
                        // Insert Function will send Database Operation Status,If Status True.
                        if($status){
                            //header('location: ../views/accounts/login.html');
                        }
                        // If Operation Failed.
                        else{
                            echo "error..try again";
                        }	
                    
                    // If Password and re-password are not Same.
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
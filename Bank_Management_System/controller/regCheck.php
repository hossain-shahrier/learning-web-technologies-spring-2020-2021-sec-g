<?php
	session_start();
	require_once('../model/userModel.php');
	if(isset($_POST['signup'])){
		
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];
			
			
			if($username == "" || $password == "" || $email == ""){
					echo "null value found...";
			}
			else{
					if($password == $repassword){
						$user = [	
							'username'	=> $username, 
							'password'	=> $password, 
							'email'		=> $email, 
							'type'		=> $account
						];
				
						$status = insertUser($user);
						if($status){
							header('location: ../views/login.html');
						}else{
							echo "error..try again";
						}	
					}else{
						echo "password & confirm password mismatch...";
					}
				}
			}

?>
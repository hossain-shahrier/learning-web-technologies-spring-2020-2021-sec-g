<?php
	session_start();

	if(isset($_POST['signup'])){
		$account = $_SESSION['current_account'];
		
		// Check if the account is Personal Account or Not
		if($account == 'personal'){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];
			$email = $_POST['email'];
				if($username == "" || $password == "" || $email == ""){
				echo "null value found...";
			}else{
				if($password == $repassword){

					$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
					$_SESSION['current_user'] = $user;

					header('location: ../views/login.html');
				}else{
					echo "password & confirm password mismatch...";
				}
			}
		}
		// Check if the account is Business Account or Not
		if($account == 'business'){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];
			$email = $_POST['email'];
				if($username == "" || $password == "" || $email == ""){
				echo "null value found...";
			}else{
				if($password == $repassword){

					$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
					$_SESSION['current_user'] = $user;

					header('location: ../views/login.html');
				}else{
					echo "password & confirm password mismatch...";
				}
			}
		}
	}


?>
<?php

	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){
		
		$email  = $_POST['email'];
		$password = $_POST['password'];
		if($email == "" || $password == ""){
			echo "null input...";
		}
		else{

			$status = validateUser($password, $email);

			if($status){
				$_SESSION['flag'] = true;
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				header('location: ../views/home.php');
			}
			else{
				echo "invalid user...";
			}
		}
	}


?>
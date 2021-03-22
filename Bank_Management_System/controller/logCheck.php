<?php

	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email  = $_POST['email'];

		if($username == "" || $password == ""){

			echo "null input...";

		}
		else{

			$status = validateUser($username, $password, $email);

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
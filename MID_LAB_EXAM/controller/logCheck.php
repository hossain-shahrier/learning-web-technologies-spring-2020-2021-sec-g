<?php

	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];


		$jsondata = file_get_contents('../model/logInfo.json', 'r');
		$json = json_decode($jsondata,true);


		if($id == "" || $password == ""){
			echo "null input...";
		}else{

			foreach($json['users'] as $user){
				if($user['id'] == $id && $user['password'] == $password){
					if($username[0]=='a'){
						$_SESSION['flag'] = true;
						$_SESSION['id'] = $id;
						header('location: ../view/aHome.php');
					}
					else if($username[0]=='u'){
						$_SESSION['flag'] = true;
						$_SESSION['id'] = $id;
						header('location: ../view/uHome.php');
					}
				}else{
					echo "invalid user...";
				}
			}
			
		}
	}


?>
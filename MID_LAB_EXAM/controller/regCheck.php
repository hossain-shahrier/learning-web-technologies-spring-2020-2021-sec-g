<?php

	if(isset($_POST['signup'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$name = $_POST['name'];
        $userType = $_POST['type'];

		if($id == "" || $password == "" || $name == ""|| $userType == ""){
			echo "null value found...";
		}else{
			if($password == $repass){

				$current_data = file_get_contents('../model/logInfo.json');
				$array_data = json_decode($current_data,true);
				$new_data = array(
							'id' => $id,
							'password' => $password,
							'name' => $name,
                            'userType' => $userType
				);

				$array_data["users"][] =$new_data;
				$json_data = json_encode($array_data, JSON_PRETTY_PRINT);

				if(file_put_contents('../model/logInfo.json', $json_data)){
					header('location: ../view/login.html');
				}else{
					echo "error";
				}

				
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>
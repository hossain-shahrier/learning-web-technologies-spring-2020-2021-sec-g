<?php
	if(isset($_POST['submit'])){

		$email =  $_POST['email'];
		

		if($email == "" ){
			echo "Null submission...";
		}else{
			echo "Success!!!";
		}

	}else{
		echo 'invalid request...';
	}


<?php 
    if(isset($_POST['submit'])){
        $name 		=  $_POST['name'];

        if($name == ""){
			echo "Null submission...";
		}else{
			echo "Success!!!";
		}
    }
    else{
		echo 'Invalid request...';
	}
?>
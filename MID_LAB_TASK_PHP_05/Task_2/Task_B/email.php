<?php
	if(isset($_POST['submit'])){

		$email =  $_POST['email'];
		if($email == ""){
			echo "Null submission...";
		}else{
			echo $email ."<br>";
			echo "Success!!!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Email</legend>
			<input type="Email" name="email" value=""> 
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html> 
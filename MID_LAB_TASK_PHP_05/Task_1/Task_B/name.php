  
<?php
	if(isset($_POST['submit'])){

		$name 	=  $_POST['name'];

		if($name == "" ){
			echo "Null submission...";
		}else{
			echo $name ."<br>";
			echo "Success!!!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>
<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>Name</legend>
            <input type="text" name="name" />
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
    
    
</body>
</html>
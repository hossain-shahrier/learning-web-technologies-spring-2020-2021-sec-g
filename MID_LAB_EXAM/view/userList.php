<?php
	$title = "User List Page";
	include('header.php');

	
?>

	<a href="aHome.php">Back</a>	
	<br>
	

<?php
	$jsondata = file_get_contents('../model/mManageInventory.json', 'r');
	$json = json_decode($jsondata,true);

	echo "<h4>Profile</h4>";

	foreach($json['users'] as $usr){

			echo "<li>ID: ".$usr['id']."</li>";
			echo "<li>NAME: ".$usr['name']."</li>";
			echo "<li>USER TYPE: ".$usr['userType']."</li><br>";
	}
	
	include('footer.php');

	
?>
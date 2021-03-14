<?php
	//session_start();
	$title = "Admin Home Page";
	include('header.php');
?>

<center>
	<h1>Welcome <?php echo $_SESSION['id']; ?>!</h1>
	<a href="aProfile.php">Profile</a>
	<br/>
	<a href="change_password.html">Change Password</a>
	<br/>
	<a href="userList.php">View Users</a>
	<br/>
	<a href="login.html">Logout</a>
</center>

<?php
	include('footer.php');
?>
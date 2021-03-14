<?php
	
	$title = "Admin Home Page";
	include('header.php');
?>

<center>
    <h1>Welcome
        <?php echo $_SESSION['username']; ?>!
    </h1>
    <a href="aProfile.html">Profile</a>
    <br />
    <a href="change_password.html">Change Password</a>
    <br />
    <a href="view_users.html">View Users</a>
    <br />
    <a href="login.html">Logout</a>
</center>

<?php
	include('footer.php');
?>
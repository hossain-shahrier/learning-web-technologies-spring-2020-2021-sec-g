<?php
    session_start();
    require_once('../../model/userModel.php');
    $email = $_SESSION['email'];
    $account = userAccount($email);
?>

<html>
    <h1>Welcome Home, <?php  echo $_SESSION['username']; ?></h1>
    <h1>you are, <?php echo $account; ?></h1>
    <a href="../../controller/logout.php"> Logout</a>
</html>

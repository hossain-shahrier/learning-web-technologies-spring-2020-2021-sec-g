<?php
    session_start();  
    require_once('../../model/userModel.php');
    $email = $_SESSION['email'];
    $account = userAccount($email);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <button><a href="./store.html">Create store</a></button>
    <div>
        <p>Welcome, <?php echo $_SESSION['username']?></p>
    </div>

</body>
</html>

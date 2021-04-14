<link rel="stylesheet" href="style.css">

<?php
    session_start();
    include('model/userModel.php');

?>
<?php
    include('header/header.php');  
?>
<div class="body">
<?php
        include('sidebar/sidebar.php');
?>
<?php
    include('account-main/main.php');
?>

</div>
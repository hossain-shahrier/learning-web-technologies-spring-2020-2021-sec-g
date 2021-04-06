<link rel="stylesheet" href="style.css">
<?php
    session_start();
    require_once('./model/userModel.php');
?>
<?php
    include('header/header.php');  
?>
<div class="body">
    <?php
        include('sidebar/sidebar.php');
    ?>
    <?php
        include('transaction-main/main.html');
        include('transaction-main/style.php')
    ?>
</div>

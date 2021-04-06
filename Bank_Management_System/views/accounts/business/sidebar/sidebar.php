<?php
    include('style.php');
?>
<div class="sidebar">
        <center>
        <h4><?php echo $_SESSION['username'];?></h4>
        <p>Account No :10-12E437-<?php echo $_SESSION['id'];?></p>
        </center>
        <div class="contents">
            <a href="./dashboard.php"class="cards">Dashboard</a>
            <a href="./transaction.php" class="cards">Transactions</a>
            <a href="./cards" class="cards">Services</a>
            <a href="./cards" class="cards">Settings</a>
            <a href="./cards" class="cards">Accounts</a>
            <!-- <a href="./cards" class="cards">Transfer</a> -->
        </div>
    
</div>
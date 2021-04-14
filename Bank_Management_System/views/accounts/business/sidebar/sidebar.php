<?php
    include('style.php');
?>
<div class="sidebar">
        <center>
        <h4><?php echo $_SESSION['username'];?></h4>
        <p>Account No :10-12E437-<?php echo $_SESSION['id'];?></p>
        </center>
        <div class="contents">
            <a href="./dashboard.php"class="dashboard">Dashboard</a>
            <a href="./transaction.php" class="transaction">Transactions</a>
            <a href="./business.php" class="business">Your Business</a>
            <a href="./loan.php" class="loan">Loan</a>
            <a href="./contact.php" class="contact">Contact</a>
            <a href="./account.php" class="cards">Account</a>
        </div>
    
</div>
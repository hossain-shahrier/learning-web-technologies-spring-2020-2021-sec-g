<?php 
    include('style.php');
    $id =$_SESSION['id'];
    $username = userName($id);
    $conn = mysqli_connect('localhost', 'root', '', 'bank_management_system');
    $sql = "SELECT * FROM `users` WHERE id = $id ";
    $result = mysqli_query($conn, $sql); 
    $row = mysqli_fetch_assoc($result);

?>
<div class="sidebar">
        <center>
        <h4><?php echo $row['username'];?></h4>
        <p>Account No :10-12E437-<?php echo $_SESSION['id'];?></p>
        </center>
        <div class="contents">
            <a href="./dashboard.php"class="dashboard">Dashboard</a>
            <a href="./transaction.php" class="transaction">Transactions</a>
            <a href="./account.php" class="cards">Accounts</a>
            <!-- <a href="./cards" class="cards">Transfer</a> -->
        </div>
    
</div>
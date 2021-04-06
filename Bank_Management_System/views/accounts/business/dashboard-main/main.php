
<?php 
    include('style.php');
   // require_once('../model/userModel.php');
?>
<div>
    <div class="main">
        <div class="balance">
            <h4>Your Balance is : <?php echo $_SESSION['balance'];?></h4>
        </div>
        <div class="pending">
            <h4>Pending : </h4>
        </div>
        <div class="processed">
            <h4>Processed : </h4>
        </div>
    </div>
    <div class="history">History
        <?php
                echo $_SESSION['balance'];
        ?>
    </div>
        
</div>


<?php 
    include('style.php');
    require_once('model/userModel.php');
    $id = $_SESSION['id'];
    $balance = userBalance($id);
?>
<div>
    <div class="main">
        <div class="balance">
            <h4>Your Balance is : <?php echo $balance; ?></h4>
        </div>
    </div>
    <div class="history">
        
        
    </div>
        
</div>

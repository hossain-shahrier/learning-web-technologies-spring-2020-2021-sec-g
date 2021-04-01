<?php
    include('css.php');
?>
<div class="main">
    <div class="header">
        <div><h1>Dashboard</h1></div>
        <div class="store">
            <button>Create store</a></button>
            <button>Your Stores</a></button>
        </div>
    </div>
    <div class="card-body">
        <div class="card">
            <?php echo "Your Balance is $".userBalance($email) ?>
        </div>
        <div class="card">
            <?php echo "Your Balance is $".userBalance($email) ?>
        </div>
    </div>
</div>
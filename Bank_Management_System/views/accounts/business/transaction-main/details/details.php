<?php
    session_start();
    require('../../model/userModel.php');
    include('style.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $username = getUserbyId($id);
        $account  = userAccountById($id);
        $_SESSION['transaction_user'] = $username;
    }
?>
<div class="navbar-details">
        <?php include('../../header/navbar/navbar.php');?> 
</div>
<div class="container">
        <div class="body-content">
            <div>
                <h2>Send Money to <?php echo $username; ?> :</h2>
            </div>
            <br>
            <div class="body-input">
                <form name="transactionAmoun" action="" method="POST" onsubmit="return validation()">
                    <input type="number" name="amount" placeholder="Enter Ammount...">
                    <input type="submit" name ="send" value="Send" class="send_button">
                    <div class="error"></div>
                </form>
                <a href='../../dashboard.php'>Back</a>
            </div>
        </div>
</div>

<div>
    <center>
        <?php

            if(isset($_POST['send'])){
                if($_POST['amount']>0){
                    $holder_id          = $_SESSION['id'];
                    $amount             = $_POST['amount'];
                    $holder_balance     = userBalance($holder_id);
                    if($holder_balance>=$amount){
                        $holder_balance     = $holder_balance - $amount;
                        $status             = updateHolder($holder_balance,$amount,$holder_id);
                        if($status){
                            $receiver_balance   = ReceiverBalance($id);
                            $receiver_balance   = $receiver_balance + $amount;
                            $status             = updateReceiver($receiver_balance,$amount,$id);
                            if($status){

                                echo "Transaction Completed !";
                            }
                            else{
                                echo "Transaction caouldn't be done";
                            }
                        }
                        else{
                            echo "Transaction error...";
                        }
                    }
                    else{
                        echo "Insufficient Balance";
                    } 
                }
                else{
                    echo "Transaction cannot be null.";
                }    
            }
        ?>
    </center>
</div>
<script type = "text/javascript">
            function validation(){
                
                if(document.transaction.amount.value == ""){
                    document.getElementById('error').innerHTML = "Please enter your email address .";
                    return false;
                }
            }
</script>
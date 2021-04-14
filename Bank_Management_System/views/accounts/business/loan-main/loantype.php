<?php
    require('../model/userModel.php');
    if(isset($_POST['submit'])){
       if(isset($_POST['radio'])){
            $business = $_POST['select'];
            $loan     = $_POST['radio'];
            $status = insertLoan($loan);
            if($status){
                echo "Applied Loan to your Business";
            }
            else{
                echo "try again";
            }
       }
       else{
            echo "Select Loan Service";
       }
    }

?>
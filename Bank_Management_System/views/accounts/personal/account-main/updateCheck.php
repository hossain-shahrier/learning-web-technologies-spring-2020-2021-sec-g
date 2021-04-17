<?php
    session_start();
    $id = $_SESSION['id'];
    require('../model/userModel.php');
    if(isset($_POST['update'])){
		
        $username = $_POST['username'];
    
        $status = updateUser($username,$id);
    
        // Insert Function will send Database Operation Status,If Status True.
        if($status){
            header('location: ../account.php');
        }
            // If Operation Failed.
        else{
            echo "error..try again";
        }	
                    
    }

?>
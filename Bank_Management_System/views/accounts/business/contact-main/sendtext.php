<?php
    if(isset($_POST['submit'])){
        $message = $_REQUEST['message'];
        echo $message;
    }
    else{
        echo "null text";
    }

?>
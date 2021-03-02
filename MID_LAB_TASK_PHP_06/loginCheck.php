<?php
    session_start();

    if(isset($_POST['submit']))
    {
        $username= $_POST['username'];
        $password= $_POST['password'];

        if($username=="" || $password== "")
        {
            echo "Null input...";
        }
        else
        {
            if($_SESSION['username']== $username && $_SESSION['password']== $password)
            {
                echo "Valid user...";
            }
            else
            {
                echo "Invalid info...";
            }
        }
    } 

?>
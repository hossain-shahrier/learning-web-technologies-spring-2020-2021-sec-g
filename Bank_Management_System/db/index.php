<?php
    $connection = mysqli_connect('localhost','root','','bank_management_system');

    // if($connection){
    //     echo "Success";
    // }else{
    //     die('DB Connection failed');
    // }
    $sql = "insert into account_list values('Personal',1,'P')";
    $result = mysqli_query($connection, $sql);

    echo $result;

?>
<?php
    session_start();
    require('../model/userModel.php');  
    $id = $_SESSION['id'];
    $active = getUserStatusbyId($id);
    $sql = "UPDATE `users` SET `active` !=$active  WHERE 1";
    $conn = getConnection();
    $result = mysqli_query($conn, $sql);
    return $result;
?>
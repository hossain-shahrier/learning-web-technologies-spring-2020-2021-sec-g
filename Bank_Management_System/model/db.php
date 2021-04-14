<?php
    $dbname = "bank_management_system";
    $dbuser= "root";
    $dbpassword = "";
    $dbhost="localhost";

    function getConnection()
    {
        global $dbname,$dbhost,$dbuser,$dbpassword;
        $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
        return $conn;

    }

?>
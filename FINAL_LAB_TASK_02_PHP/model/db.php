<?php
    $dbname = "product_db";
    $dbuser= "root";
    $dbpassword = "";
    $dbhost="localhost";

    function getConnection(Type $var = null)
    {
        # code...
        global $dbname,$dbhost,$dbuser,$dbpassword;
        $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
        return $conn;

    }

?>
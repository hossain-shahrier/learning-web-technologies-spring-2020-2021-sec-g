<?php

    require_once('db.php');
    function insertStore($store){
	
        $conn = getConnection();
        $sql = "insert into store values('', '{$store['storename']}','{$store['storetype']}','{$store['producttype']}')";
    
        $result = mysqli_query($conn, $sql);
    
        if($result){
            return true;
        }else{
            return false;
        }
    }
    function getStores(){
	
        $conn = getConnection();
        $sql = "select * from store";
        $result = mysqli_query($conn, $sql);
        $products = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($products, $row);
        }
        return $products;
    }
    

?>
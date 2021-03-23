<?php

require_once('db.php');

function insertProduct($product){
	
    $conn = getConnection();
    $sql = "insert into products values('', '{$product['name']}','{$product['bprice']}','{$product['sprice']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}



?>
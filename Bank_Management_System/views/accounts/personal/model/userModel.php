<?php

require_once('db.php');

function validateUser($email,$password){
	$conn = getConnection();
	$sql = "select * from users where password='{$password}' and email='{$email}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if($row ==!null){
		return true;
	}else{
		return false;
	}
}
function insertBusiness($business){
	$conn = getConnection();
    $sql = "INSERT INTO business VALUES ('','{$business['username']}','{$business['bname']}','{$business['phone']}','{$business['btype']}','{$business['burl']}','','{$business['blocation']}')";
	$result = mysqli_query($conn, $sql);
	if($result){
		return true;
	}else{
		return false;
	}

}
function insertLoan($loan){
	$conn = getConnection();
	$sql = "INSERT INTO `business`( `loan`) VALUES ('$loan') WHERE `name` =$loan ";
	$result = mysqli_query($conn, $sql);
	if($result){
		return true;
	}else{
		return false;
	}

}

function insertUser($user){
	
    $conn = getConnection();
    $sql = "insert into users values('', '{$user['username']}','{$user['password']}','{$user['email']}','{$user['account']}',0)";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}
// function TransactionHistory($username,$account,$amount){
// 	$conn = getConnection();
// 	$sql  = "INSERT INTO `transaction_users`(`id`, `username`, `account`, `transaction`) VALUES ('','{$username}','{$account}','{$amount}')";
// 	$result = mysqli_query($conn, $sql);
// 	if($result){
// 		return true;
// 	}else{
// 		return false;
// 	}
// }
function transaction_users(){
	$conn =getconnection();
	$sql = "SELECT * FROM `transaction_users` ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['username'];

}
function userAccount($email){
	$conn = getConnection();
	$sql = "select * from users where email='{$email}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['account'];
}
function userAccountById($id){
	$conn = getConnection();
	$sql = "select * from users where id='{$id}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['account'];
}
function userId($email){
	$conn = getConnection();
	$sql = "select * from users where email='{$email}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['id'];
}
function userName($id){
	$conn = getConnection();
	$sql = "select * from users where id='{$id}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['username'];
}


function getUserbyId($id){
	
	$conn = getConnection();
	$sql = "select * from users where id= $id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['username'];
}
function getUserStatusbyId($id){
	$conn = getConnection();
	$sql = "select * from users where id=$id ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['active'];
}

function getAllUser(){

	$conn = getConnection();
	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}
	return $users;
}

function getAdmin(){

	$conn = getConnection();
	$sql = "select * from users where id = 5 ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['username'];
}
function deleteUser($id){
	$conn = getConnection();
	$sql = "delete from users where id='{$id}";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function getUserByName($username){
	$conn = getConnection();
	$sql = "select * from users where username='{$username}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

function userBalance($holder_id){
	$conn = getConnection();
	$sql = "select * from users where id='{$holder_id}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['balance'];
}

function ReceiverBalance($id){
	$conn = getConnection();
	$sql = "select * from users where id='{$id}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['balance'];
}
function updateHolder($holder_balance,$amount,$id){
	$conn = getConnection();
	$sql = "UPDATE `users` SET `balance`='{$holder_balance}',`transaction`='{$amount}' WHERE id='{$id}' ";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}
function updateReceiver($receiver_balance,$amount,$id){
	$conn = getConnection();
	$sql = "UPDATE `users` SET `balance`='{$receiver_balance}',`transaction`='{$amount}' WHERE id='{$id}' ";
	$result = mysqli_query($conn, $sql);
	if($result){
		return true;
	}else{
		return false;
	}
}
function updateUser($username,$id){
	$conn = getConnection();
	$sql = "UPDATE `users` SET `username`='{$username}' WHERE id='{$id}' ";
	$result = mysqli_query($conn, $sql);
	if($result){
		return true;
	}else{
		return false;
	}
}
?>
<?php

require_once('db.php');

function validateUser($password, $email){
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
function userAccount($email){
	$conn = getConnection();
	$sql = "select * from users where email='{$email}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['type'];
}
function userId($email){
	$conn = getConnection();
	$sql = "select * from users where email='{$email}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['Id'];
}
function insertUser($user){
	
    $conn = getConnection();
    $sql = "insert into users values('', '{$user['username']}','{$user['password']}','{$user['email']}','{$user['type']}',0)";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}

function getUserbyId($id){
	
	$conn = getConnection();
	$sql = "select * from users where id='{$id}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
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

function updateUser($user){
	$conn = getConnection();
	$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', type='{$user['type']}'";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
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
function userBalance($email){
	$conn = getConnection();
	$sql = "select * from users where email='{$email}' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['balance'];
}
?>

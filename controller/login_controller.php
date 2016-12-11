<?php
	include_once '../db/db_functions.php';
	$conn = db_connect();
	$condition = array('username' => $_POST["username"], 'password' => $_POST["password"] );
	$result = select('*','users',$condition,$conn);
	// print_r($result);
	if($result[0] != "empty"){
		$_SESSION["user_details"]["username"] = $result[0]["username"];
		$_SESSION["user_details"]["userid"] = $result[0]["id"];
		$_SESSION["user_details"]["contact_list"] = $result[0]["contact_list"];
		header("Location:../view/home.php");
		// print_r("data fetched");
	}else{
		header("Location: ../index.php?verify=verify");
		// print_r("error");
	}
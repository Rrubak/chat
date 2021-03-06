<?php 
	session_start();
	function db_connect(){
		include_once '../model/curd_operations.php';
		$servername = "localhost";
		$username = "root";
		$password = "";
		$conn = mysqli_connect($servername, $username, $password,"chat");
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		return $conn;		
	}

	function execute_query($sql, $conn){
		return $conn->query($sql);
	}
	function landing_page_session_check(){
		if(emptty($_SESSION["user_details"]) || !isset($_SESSION["user_details"])){
			header('location:../index.php');
			// print_r("redirect to login");
		}
	}
	function login_page_session_check(){
		if(isset($_SESSION["user_details"])){
			header('location:view/home.php');
			// print_r("redirect to home");
		}
	}
	function get_contact_name(){
		$conn = db_connect();
		$condition = '`id` in('.$_SESSION["user_details"]["contact_list"].')';
		$contacts_name = select('*','users', $condition , $conn);
		// print_r($contacts_name);
		return $contacts_name;
	}
	function get_name(){
		$conn = db_connect();
		$condition = '`id` NOT in('.$_SESSION["user_details"]["contact_list"].','.$_SESSION["user_details"]["userid"].')';
		$name = select('username','users', $condition , $conn);
		return $name;
	}
	function is__array($value){
		return is_array($value);
	}
	function emptty($value){
		return empty($value);
	}
	function log_out(){
		session_destroy();   
	}
	function get_array_from_object($result){
		return mysqli_fetch_array($result, MYSQLI_ASSOC);
	}
	function session_update(){
		$conn = db_connect();
		$condition = array('id' => $_SESSION["user_details"]["userid"]);
		$result = select('*','users',$condition,$conn);
		if($result[0] != "empty"){
			$_SESSION["user_details"]["username"] = $result[0]["username"];
			$_SESSION["user_details"]["contact_list"] = $result[0]["contact_list"];
			$_SESSION["user_details"]["status"] = $result[0]["status"];
		}
	}
	function sanitize($input, $con){
		return mysqli_real_escape_string($con, $input);
	}
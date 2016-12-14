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
		$contacts_name = select('`username`, `id`','users', $condition , $conn);
		// print_r($contacts_name);
		return $contacts_name;
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
		}
	}
	function get_messages(){
		$conn = db_connect();
		$contacts_id = explode(',' , $_SESSION["user_details"]["contact_list"]);
		// print_r($contacts_id);
		foreach ($contacts_id as $key => $value) {
			$condition = " `sender_id` IN(".$_SESSION["user_details"]["userid"].",".$value.") AND `receiver_id` IN(".$_SESSION["user_details"]["userid"].",".$value.") ORDER BY `message_time`";
			$result[] = select('`receiver_id`, `message_content`, `message_time`', 'message', $condition , $conn);	
		}
		// print_r($result);
		return $result;
	}
	function sanitize($input, $con){
		return mysqli_real_escape_string($con, $input);
	}
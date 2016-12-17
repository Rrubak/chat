<?php 
	include_once '../db/db_functions.php';
	session_update();
	$data = $_POST;
	$conn = db_connect();
	$result = select('`id`', 'users', $data, $conn);
	$new_contach_list =  $_SESSION["user_details"]["contact_list"].",".$result[0]['id'];
	// print_r($new_contach_list);
	$update_contact_list = update('`contact_list`= "'.$new_contach_list.'"', 'users', '`id`= '.$_SESSION["user_details"]["userid"].'', $conn);
	$add_request = select('`contact_list`', 'users', '`id`= '.$result[0]['id'], $conn);
	// print_r($add_request);
	$new_request_list =  $add_request[0]["contact_list"].",".$_SESSION["user_details"]["userid"];
	$update_request = update('`contact_list`= "'.$new_request_list.'"', 'users', '`id`= '.$result[0]['id'].'', $conn);

	$current_receiver_status = select('`status`', 'users', '`id`= '.$result[0]['id'].'', $conn);
	// print_r($current_receiver_status[0]['status']);
	if($current_receiver_status[0]['status'] == 0){
		$update_msg_status = update('`status`='.$_SESSION["user_details"]["userid"].'', 'users', '`id`= '.$result[0]['id'].'', $conn);
	}elseif ($current_receiver_status[0]['status'] != $_SESSION["user_details"]["userid"]) {
		$update_msg_status = update('`status`= "'.$current_receiver_status[0]['status'].','.$_SESSION["user_details"]["userid"].'"', 'users', '`id`= '.$result[0]['id'].'', $conn);
	}
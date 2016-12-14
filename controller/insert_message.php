<?php 
	include_once '../db/db_functions.php';
	$conn = db_connect();
	$receiver_id = explode('r' ,$_POST['user_id']);
	$message = $_POST['message_content'];
	$last_message_id = get_last_message($receiver_id[1] , $conn);
	if($last_message_id['receiver_id'] == $receiver_id[1] && $last_message_id['sender_id'] == $_SESSION["user_details"]["userid"]){
		// echo "error";
		$condition = " `sender_id` IN(".$_SESSION["user_details"]["userid"].",".$receiver_id[1].") AND `receiver_id` IN(".$_SESSION["user_details"]["userid"].",".$receiver_id[1].") ORDER BY `message_time`";
		$result = select('`message_content`, `message_time`', 'message', $condition , $conn);
		$last_message_content = end($result);
		$new_message_content = $last_message_content['message_content']  ."</br>". $message;
		$conditions = array('id' => $last_message_id['id']);
		$column_names = array('message_content' => $new_message_content, 'message_time' => date('Y-m-d H:i:s'));
		$result = update($column_names, 'message', $conditions, $conn);
		// print_r($result);
	}else{
		$column_names_and_values = array('message_content' => $message,'receiver_id' => $receiver_id[1], 'sender_id' => $_SESSION["user_details"]["userid"] ,'message_time' => date('Y-m-d H:i:s'));
		$result = insert('message', $column_names_and_values, $conn);
		// print_r($result);
	}


	function get_last_message($value , $conn){
		$condition = " `sender_id`  = ".$_SESSION["user_details"]["userid"]." AND `receiver_id` =".$value."";
		$result = select('`id`, `receiver_id`, `sender_id`','`message`', $condition , $conn);	
		$last_message = end($result);
		// print_r($last_message);
		return $last_message;
	}
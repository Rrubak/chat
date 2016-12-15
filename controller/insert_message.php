<?php 
	include_once '../db/db_functions.php';
	$conn = db_connect();
	$receiver_id = explode('r' ,$_POST['user_id']);
	$message = $_POST['message_content'];
	$last_message_id = get_last_message($receiver_id[1] , $conn);
	if($last_message_id['receiver_id'] == $receiver_id[1] && $last_message_id['sender_id'] == $_SESSION["user_details"]["userid"] && $last_message_id['count'] != 1){
		// echo "error";
		$condition = " `sender_id`  = ".$_SESSION["user_details"]["userid"]." AND `receiver_id` =".$receiver_id[1]."";
		$result = select('`message_content`, `message_time`', 'message', $condition , $conn);
		$last_message_content = end($result);
		$new_message_content = $last_message_content['message_content']  ."</br>". $message;
		$conditions = array('id' => $last_message_id['id']);
		$column_names = array('message_content' => $new_message_content, 'message_time' => date('Y-m-d H:i:s'));
		$result1 = update($column_names, 'message', $conditions, $conn);
		$result2 = update('`status`= 1', 'users', '`id`= '.$_SESSION["user_details"]["userid"].'', $conn);
		// print_r($result);
	}else{
		$column_names_and_values = array('message_content' => $message,'receiver_id' => $receiver_id[1], 'sender_id' => $_SESSION["user_details"]["userid"] ,'message_time' => date('Y-m-d H:i:s'));
		$result = insert('message', $column_names_and_values, $conn);
		// print_r($result);
	}


	function get_last_message($value , $conn){
		$condition = " `sender_id` IN(".$_SESSION["user_details"]["userid"].",".$value.") AND `receiver_id` IN(".$_SESSION["user_details"]["userid"].",".$value.") ORDER BY `message_time`";
		$result = select('`message_content`,`id`, `receiver_id`, `sender_id`','`message`', $condition , $conn);	
		$last_message = end($result);
		$last_message['count'] = count($result);
		// print_r($last_message['count']);
		return $last_message;
	}
<?php 
	include_once '../db/db_functions.php';
	$conn = db_connect();
	$receiver_id = explode('r' ,$_POST['user_id']);
	$message = $_POST['message_content'];
	$last_message_id = get_last_message($receiver_id[1] , $conn);
	//check previous message sender and receiver id matches current sender and receiver
	if($last_message_id != "empty" && $last_message_id['receiver_id'] == $receiver_id[1] && $last_message_id['sender_id'] == $_SESSION["user_details"]["userid"]){
		print_r("expression");
		//merge message in previous message
			//get previous message 
				$condition = " `sender_id`  = ".$_SESSION["user_details"]["userid"]." AND `receiver_id` =".$receiver_id[1]."";
				$get_previous_msg = select('`message_content`, `message_time`', 'message', $condition , $conn);
				$last_message_content = end($get_previous_msg);

			//merge previous and current message content
				$new_message_content = $last_message_content['message_content']  ."</br>". $message;

			//update message content in db
				$condition1 = array('id' => $last_message_id['id']);
				$column_names = array('message_content' => $new_message_content, 'message_time' => date('Y-m-d H:i:s'));
				$update_msg_content = update($column_names, 'message', $condition1, $conn);

			//update read status in db
				$current_sender_status = select('`status`', 'users', '`id`= '.$_SESSION["user_details"]["userid"].'', $conn);
				print_r($current_sender_status);
				$update_msg_status = update('`status`= 1', 'users', '`id`= '.$_SESSION["user_details"]["userid"].'', $conn);
				// print_r($result);
	}else{
		//add new message in new entry
			$column_names_and_values = array('message_content' => $message,'receiver_id' => $receiver_id[1], 'sender_id' => $_SESSION["user_details"]["userid"] ,'message_time' => date('Y-m-d H:i:s'));
			$result = insert('message', $column_names_and_values, $conn);
			// print_r($result);
	}


	function get_last_message($value , $conn){
		$condition = " `sender_id` IN(".$_SESSION["user_details"]["userid"].",".$value.") AND `receiver_id` IN(".$_SESSION["user_details"]["userid"].",".$value.") ORDER BY `message_time`";
		$result = select('`id`, `receiver_id`, `sender_id`','`message`', $condition , $conn);
		if($result == "empty"){
			return $result;
		}else{
			if (count($result) > 1) {
				$last_message = end($result);
			}else{
				$last_message = $result[0];
			}
		}

		// print_r($last_message);
		return $last_message;
	}
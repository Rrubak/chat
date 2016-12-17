<?php 
	include_once '../db/db_functions.php';
	$conn = db_connect();
	$receiver_id = explode('r' ,$_POST['user_id']);
	$condition = " `sender_id` IN(".$_SESSION["user_details"]["userid"].",".$receiver_id[1].") AND `receiver_id` IN(".$_SESSION["user_details"]["userid"].",".$receiver_id[1].") ORDER BY `message_time` DESC";
	$result = select('`message_content`, `message_time`', 'message', $condition , $conn);	
	// print_r($result);
	 	if($result == "empty"){
	 		echo '<div class="meta-bar chat" id="message" style ="background:white;" ><input class="nostyle chat-input" id = msgsendr'.$receiver_id[1].' type="text" placeholder="Message..." /> <i class="mdi mdi-send" id = sendr'.$receiver_id[1].'></i></div><div class="list-chat user'.$receiver_id[1].'" style ="padding-bottom: 53px;"><ul class="chat" >';
	 		echo '<li> <div class="message"> &#x1f618; Sorry no messages present .. send to start the conversation </div></li></ul></div>';
	 	}else{
		 	echo'<div class="meta-bar chat" id="message" style ="background:white;" ><input class="nostyle chat-input" id = msgsendr'.$receiver_id[1].' type="text" placeholder="Message..." /> <i class="mdi mdi-send" id = sendr'.$receiver_id[1].'></i></div><div class="list-chat user'.$receiver_id[1].'" style ="padding-bottom: 53px;">
	 			 <ul class="chat" style ="height:80%">';
				foreach ($result as $data) {
			 		echo'<li><img src="../images/index.png">
			 			<div class="message">'.$data['message_content'].'
			 			</div>
			 			</li>';
			 	}
			echo '</ul></div>';
			$current_receiver_status = select('`status`', 'users', '`id`= '.$_SESSION["user_details"]["userid"].'', $conn);
			// print_r($current_receiver_status[0]['status']);
			$updated_status =explode('0,',str_replace($receiver_id[1],'0',$current_receiver_status[0]['status']));
			// print_r($updated_status);
			if ($updated_status[0] =="") {
				$new_status = $updated_status[1];
			}elseif ($updated_status[1] =="") {
				$new_status = $updated_status[0];
			}elseif($updated_status[1] =="" && $updated_status[0] ==""){
				$new_status = 0;
			}else{
				$new_status = $updated_status[0].$updated_status[1];
			}
			// print_r($new_status);
			$result2 = update('`status`= "'.$new_status.'"', 'users', '`id`= '.$_SESSION["user_details"]["userid"].'', $conn);
			print_r($result2);
	 	}
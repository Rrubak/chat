<?php 
	include_once '../db/db_functions.php';
	$conn = db_connect();
	$receiver_id = explode('r' ,$_POST['user_id']);
	$condition = " `sender_id` IN(".$_SESSION["user_details"]["userid"].",".$receiver_id[1].") AND `receiver_id` IN(".$_SESSION["user_details"]["userid"].",".$receiver_id[1].") ORDER BY `message_time`";
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

	 	}
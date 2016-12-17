<?php
	include_once '../db/db_functions.php';
	landing_page_session_check(); 
	session_update();
	$names = get_contact_name();
	$unread_id = explode(',',$_SESSION["user_details"]["status"]);
	// print_r($names);
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Chat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet prefetch' href='http://cdn.materialdesignicons.com/1.1.70/css/materialdesignicons.min.css'>
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:300'>
	<link rel="stylesheet" href="../css/style.css">
	<script type="text/javascript">
		localStorage.setItem('username', <?php echo "'".$_SESSION["user_details"]["username"]."'"; ?>);
	</script>
</head>
<body>
	<style id="dynamic-styles"></style>
	<div id="hangout">
		<div id="head" class="style-bg"> <i class="mdi mdi-arrow-left"></i> <i class="mdi mdi-fullscreen-exit"></i> <i class="mdi mdi-menu"></i> 
		<h1><?php echo $_SESSION["user_details"]["username"]; ?></h1><!-- <i class="mdi mdi-logout"> --></i><i class="mdi mdi-chevron-down"></i></div>  
		<div id="content">
<!-- 			<div id="floater-position">          
				<div id="add-contact-floater" class="floater control style-bg hidden"><i class="mdi mdi-plus"></i></div>   
			</div> -->
			<div class="card menu">
				<div class="header">

				<img src="../images/index.png" />
				<h3></h3>
				</div>
				<div class="content">
					<div class="i-group">
						<input type="text" id="username"><span class="bar"></span>
						<label>Name</label>
					</div>        
					<br />
					<div class="center"><canvas id="colorpick" width="250" height="220" ></canvas></div>                        
				</div>
			</div> 
			<div class="list-text">
				<ul class="list mat-ripple">    
				<?php
					foreach ($names as $name){
					 	echo '<li id = "user'.$name['id'].'">
							<img src="../images/index.png">
							<div class="content-container">
								<span class="name">'.$name['username'].'</span>';
								foreach ($unread_id as $key) {
									if($name['id'] == $key){
										echo '<i class="mdi mdi-alert-circle" style="color: lime;"></i>';
									}
								}

							echo '</div></li> ';
					 } 
					 echo "</ul></div>";
				?>  
				<div id="response"></div>
								<div id="floater-position">          
				<div id="chat-floater"  class="floater control style-bg hidden"><i class="mdi mdi-power"></i></div>   
			</div> 
				<!-- <span class="time">14:00</span> -->
				</ul>
					</div>  
				</div>
				<div class="overlay"></div>
				<div id="contact-modal" data-mode="add" class="card dialog">
					<h3>Add Contact</h3>
					<div class="i-group">
						<input type="text" id="new-user"><span class="bar"></span>
						<label>Name</label>
					</div>
					<div class="btn-container">
						<span class="btn cancel">Cancel</span>
						<span class="btn save">Save</span>
					</div>
				</div>
				<div id="logout" data-mode="add" class="card dialog">
					<h3>Are You Sure Want to <p>Logout ?</p></h3>
					<div class="i-group">
						&#x1f64b;&#x1f64b;&#x1f64b;&#x1f64b;
					</div>
					<div class="btn-container">
						<span id="cancel-btn" class="btn cancel">Cancel</span>
						<span id="logout-btn" class="btn save">Logout</span>
					</div>
				</div>
				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script src="../js/index.js"></script>
</body>
</html>
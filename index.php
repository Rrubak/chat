<!DOCTYPE html>
<html >
	<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	</head>
	<body>
		<div class="login">
		<?php 
			error_reporting(0);
			session_start();
			function Verify(){
				if($_SESSION["verify"]=="verify"){
					echo '<a font-size:30px;> wrong password </a>';
				} 
			}
			Verify();
			session_unset();
			session_destroy();
		?>
			<h1>Login</h1>
			<form method="post" action="controller/login_controller.php">
				<input type="text" name="username" placeholder="Username" required="required" />
				<input type="password" name="password" placeholder="Password" required="required" />
				<button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
			</form>
		</div>
		<script src="js/index.js"></script>
	</body>
</html>

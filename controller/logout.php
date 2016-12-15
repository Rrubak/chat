<?php 
session_start();
	session_destroy('user_details');
	header("location:../index.php");
	// print_r($_SESSION);
<?php
session_start();
	if(!isset($_SESSION['usuario']))
	{
		header('location: /ESDB/index.php');
	}
	else
	{
		session_destroy();
		header('location: /ESDB/index.php');
	}
	
?>
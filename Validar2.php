<?php
	session_start();
	if(!isset($_SESSION['usuario']))
	{
		
	}
	else
	{
		header('location: /ESDB/HOME/index.php');
	}
?>
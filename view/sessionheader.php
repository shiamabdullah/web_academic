<?php
require_once('../model/adminModel.php');

if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}	
if(!isset($_SESSION['flag'])){
		header('location: loginAdmin.php');
	}

?>
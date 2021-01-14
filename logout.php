<?php

session_start();

if(isset($_SESSION['Customer_Key']))
{
	unset($_SESSION['Customer_Key']);

}

header("Location: login.php");
die;
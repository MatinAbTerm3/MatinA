<?php
//Controller

include '../includes/settings.php';
include '../includes/functions.php';

if(isset($_GET['id']))
{
	
	$db = new DB();
	$table = Product::delete($_GET['id']);
	$row = $table[0];
	unset($db);
	
}
else
{
	$alert = alertTemplate('شناسه کاربری نامشخص!' , 'danger');
	echo $alert;
}
header("Location: index.html");
exit();
?>
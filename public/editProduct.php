<?php
//Controller

include '../includes/settings.php';
include '../includes/functions.php';

if(isset($_GET['id']))
{
	$db = new DB();
	
	if(isset($_POST['submit']))
	{
		$db = new DB();
	
		$parameters = $_POST;
		unset($parameters['submit']);
		$parameters['id'] = $_GET['id'];
		$table = Product::update($parameters);
	
	}
	
	$table = Product::find("id = {$_GET['id']}");
	$row = $table[0];
	unset($db);
	
}
else
{
	$alert =alertTemplate('شناسه کاربری نامشخص!' , 'danger');
	echo $alert;
}
include('../includes/view/editProduct.php');

?>
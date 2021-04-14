<?php
//Controller
include '../includes/settings.php';
include '../includes/functions.php';

$db = new DB();

$table = Product::find();

unset($db);

$alert = '';

include '../includes/view/catalog.php';

?>
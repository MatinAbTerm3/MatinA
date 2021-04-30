<?php
//Controller
include '__php__.php';


$db = new DB();

$table = Product::find();

unset($db);

$alerts = Alert::alerts();

include 'view/catalog.php';

?>
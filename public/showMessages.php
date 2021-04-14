<?php
//Controller
include '../includes/settings.php';
include '../includes/functions.php';

$db = new DB();

$table = Message::find();

unset($db);

$alert = '';

include '../includes/view/showMessages.php';

?>
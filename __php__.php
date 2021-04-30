<?php
if(! defined('SITE_PATH'))
	define('SITE_PATH' , __DIR__);
if(! defined('INC_PATH'))
	define('INC_PATH' , SITE_PATH.'/includes/');

set_include_path(INC_PATH);
include 'initialaizer.php';

if(! defined('SITE_URL'))
	define('SITE_URL' , '/Artemis/public/');

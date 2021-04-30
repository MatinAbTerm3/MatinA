<?php

if(! class_exists('Authentication'))
{
	class Authentication
	{
		static function login($uid)
		{
			//$_SESSION['authenticated'] = true;
			$_SESSION['uid'] = $uid;
		}
		
		static function uid()
		{
			return $_SESSION['uid'];
		}
		
		static function check()
		{
			return isset($_SESSION['uid']);
		}
		
		static function logout()
		{
			unset($_SESSION['uid']);
		}
	}
}

?>
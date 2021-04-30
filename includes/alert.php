<?php
if(! class_exists('Alert'))
{
	class Alert()
	{
		static function alertTemplate( $text , $type = 'danger' )
		{
			switch( $type )
			{
				case 'success': break;
				case 'warning': break;
				case 'danger': break;
			}
		$alert = "
			<article class = 'alert alert-{$type} alert-dismissible fade show' role='alert'>
				{$text}
				<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</article>";
		return $alert;	
		}
		
		static public function alerts( $text = '' , $type = 'danger')
		{
			$alerts = '';
			if($text !== '')
			{
				$_SESSION['alert'][] =  self::alertTemplate($text, $type);
			}
			elseif(isset($_SESSION['alert']))
			{
				$result = join("\n" , $_SESSION['alert']);
				unset($_SESSION['alert']);
				return $result;
			}
			else
				return false;
		}
	}
}

?>
<?php

include 'DB.php';

if(! function_exists('get_header'))
{
    function get_header($name = '')
    {
		if(! empty($name))
		{
			$name = "-{$name}";
		}
		include "view/templates/header{$name}.php";
    }
}
if(! function_exists('get_sidebar'))
{
    function get_sidebar($name = '')
    {
		if(! empty($name))
		{
			$name = "-{$name}";
		}
		include "view/templates/sidebar{$name}.php";
    }
}
if(! function_exists('get_footer'))
{
    function get_footer($name = '')
    {
		if(! empty($name))
		{
			$name = "-{$name}";
		}
		include "view/templates/footer{$name}.php";
    }
}
if(! function_exists('get_template_part'))
{
    function get_template_part($slug , $name = '' , $args = array())
    {
       if(! empty($name))
		{
			$name = "-{$name}";
		}
		$row = $args;		
		include "view/templates/{$slug}{$name}.php";
    }
}


if(! function_exists('alertTemplate'))
{
    function alertTemplate($text,$type)
    {
        $alert ="
            <article class = 'alert alert-{$type} alert-dismissible fade show' role='alert'>
                {$text}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>    
            </articale>";
        return $alert;
    }
}


if(! function_exists('redirect'))
{
    function redirect($address)
    {
        header("Location: {$address}");
        exit();
    }
}

?>
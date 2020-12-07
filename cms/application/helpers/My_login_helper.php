<?php

function _validateLogin()
	{
	$CI =& get_instance();
	   $router = &load_class('Router');
	   $currentMethod = $router->fetch_method();
	  // if(in_array($currentMethod,$this->publicMethods) == false)
		//{
		  // call some login functionality
			if(!$CI->session->userdata('email'))
			{
				redirect(base_url()."admin/login");
			}

	   //}
	 }

?>

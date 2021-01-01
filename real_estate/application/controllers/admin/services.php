<?php
 defined('BASEPATH') OR  exit('No direct script access allowed');

class Property extends CI_Controller
{

    var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }

    public function service()
    {
        
    }


}

?>
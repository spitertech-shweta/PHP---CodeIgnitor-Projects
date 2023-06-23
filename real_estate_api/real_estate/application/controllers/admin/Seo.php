<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Seo extends CI_Controller
{

    var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
		
    }

     public function seo()
     {
        $this->load->view('admin/header');
        $this->load->view('admin/seo');
		$this->load->view('admin/footer');

     }


     public function add_seo()
     {
        $data = array(
        'controller_name' => $this->input->post('controller_name'),
        'nav_header' => $this->input->post('nav_header'),
        'meta_keyword' => $this->input->post('meta_keyword'),
        'meta_description' => $this->input->post('meta_description')
        );
        
        $this->master_model->add_data('meta',$data);

        redirect(base_url().'admin/show_page');

     }


}
?>
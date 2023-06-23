<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Social_sharing extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();
        $this->load->library('session');	
    }

	function edit_social_sharing()
    { 
        $user_id 		=		$this->session->userdata('user_id');
        $where_condition = array('user_id'=>$user_id);
		$result['edit_social_sharing'] = $this->master_model->show_record_by_id('social_sharing',$where_condition);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_social_sharing',$result);
		$this->load->view('admin/footer');
    }
    function update_social_sharing()
    {
		$user_id 	=		$this->session->userdata('user_id');	
        $facebook 	=       $this->input->post('facebook');
       
        $file1 = $facebook;
        $file_headers = @get_headers($file1);
        if($file1 && (!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found')) {
            $this->session->set_flashdata('facebook url','Invalid Url');
            $exists = false;
        }
       
  
        $instagram 	=       $this->input->post('instagram');
        $file2 = $instagram;
        $file_headers = @get_headers($file2);
        if( $file2 && (!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found')) {
            $this->session->set_flashdata('instagram url','Invalid Url');
            $exists = false;
            
        }


        $twitter 	=       $this->input->post('twitter');
        $file3 = $twitter;
        $file_headers = @get_headers($file3);
        if($file3 && (!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found')) {
            $this->session->set_flashdata('twitter url','Invalid Url');
            $exists = false;
           
        }

        $whatsapp 	=       $this->input->post('whatsapp');
        $file4 = $whatsapp;
        $file_headers = @get_headers($file4);
        if( $file4 &&(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found')) {
            $this->session->set_flashdata('whatsapp url','Invalid Url');
            $exists = false;
           
        }

        $linked_in 	=       $this->input->post('linked_in');
        $file5 = $linked_in;
        $file_headers1 = @get_headers($file5);

        if($file5 && (!$file_headers1 || $file_headers1[0] == 'HTTP/1.1 404 Not Found')) {
            $this->session->set_flashdata('linked_in url','Invalid Url');
            $exists = false;
            
        }
       

		$data = array(
			'user_id' =>$user_id,
			'facebook'=>$facebook,
            'instagram'=>$instagram,
            'twitter'=>$twitter,
            'whatsapp'=>$whatsapp,
            'linked_in'=>$linked_in
		);
            
       
			$user_id = $this->session->userdata('user_id');
			$where_condition = array('user_id'=>$user_id);
			$this->master_model->update_data('social_sharing',$where_condition,$data);
			redirect(base_url()."admin/edit_social_sharing");

    }  

}

?>
<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_enquiry extends CI_Controller
{

	var $publicMethods  = array("login","logout"); 

	function __construct()
	{
		parent::__construct();
		$this->master_model->_validateLogin();	
    }
    
    function show_contact_enquiry()
    {
		$where_condition = array('status'=>1);
		$result['show_contact_enquiry'] = $this->master_model->show_data('contact_enquiry',$where_condition);
        $this->load->view('admin/header');
        $this->load->view('admin/show_contact_enquiry',$result);
		$this->load->view('admin/footer');
	}

	function view_contact_enquiry()
    {
		$where_condition = array();
		$result['view_contact_enquiry'] = $this->master_model->show_record_by_id('contact_enquiry',$where_condition);
        $this->load->view('admin/header');
        $this->load->view('admin/view_contact_enquiry',$result);
		$this->load->view('admin/footer');
	}


	function onDelete_update_contact_enquiry($contact_id=NULL)
    {
            $data =array('status'=>0);
			$where_condition = array('contact_id'=>$contact_id);
			$this->master_model->onDelete_update_data('contact_enquiry',$where_condition,$data);
			redirect(base_url()."admin/show_contact_enquiry");

    }

    function trash_contact_enquiry_0()
    {
        $where_condition = array('status'=>0);
		$result['contact_enquiry_trash']= $this->master_model->show_data('contact_enquiry',$where_condition);

		$this->load->view('admin/header');
		$this->load->view('admin/contact_enquiry_trash_0',$result);
		$this->load->view('admin/footer');

    }


    function recover_contact_enquiry($enquiry_id=NULL)
    {
            $where_condition = array('contact_id'=>$contact_id);	
			$data = array('status' => 1);    		
			$this->master_model->onRecover_update_data('contact_enquiry',$where_condition,$data);
			redirect(base_url()."admin/show_contact_enquiry");

    }


    function delete_contact_enquiry($contact_id=NULL)
    {
        $where_condition = array('contact_id'=>$contact_id);	
		$this->master_model->delete_data('contact_enquiry',$where_condition);
		redirect(base_url()."admin/show_contact_enquiry");

    }



	











}
?>